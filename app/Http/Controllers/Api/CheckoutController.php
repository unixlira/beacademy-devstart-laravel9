<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Http;



class CheckoutController extends Controller
{
    protected $transaction;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;        
    }

    public function index()
    {
        if (!$order = session()->get('order'))
            return view('site.checkout');
            
        return view('site.checkout',compact('order'));
    }

    public function create(Request $request)
    {
        
        $order = Order::find($request->order_id);


        return view('site.checkout', compact('order'));
    }

    public function ticket(Request $request)
    {

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'token' => 'UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ=='
        ])->post('https://tracktools.vercel.app/api/checkout', [
            'transaction_type' => $request->transaction_type,
            'transaction_amount' => (int)$request->transaction_amount,
            'transaction_installment' => (int)$request->transaction_installments,
            'customer_name' => $request->name,
            'customer_document' => $request->cpf,
            'customer_postcode' => $request->postcode,
            'customer_address_street' => $request->address,
            'customer_andress_number' => $request->address_number,
            'customer_address_neighborhood' => $request->address_neighborhood,
            'customer_address_city' => $request->address_city,
            'customer_address_state' => $request->address_state,
            'customer_address_country' => $request->address_country 
        ]);

        $data = $response->json();

        if($data['response']['code'] == 201){
            $result = [
                'order_id' => (int)$request->order_id,
                'code'     => $data['transaction']['id'],
                'status'   => $data['transaction']['status']
            ];
    
           $this->transaction->create($result);
        }

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('site.checkout.boleto-template', compact('request','data')));
        $dompdf->setPaper('A4');
        $dompdf->render();
        $dompdf->stream();
        
        return redirect()->route('home.index')->with('donwload', 'Boleto gerado com sucesso!');
        
    }

}
