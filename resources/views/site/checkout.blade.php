@extends('template.site')

@section('title', 'eBooks - Pagamento')

@section('content')
        <!-- Checkout form -->
        <section aria-labelledby="payment-heading" class="flex-auto overflow-y-auto px-4 pt-12 pb-16 sm:px-6 sm:pt-16 lg:px-8 lg:pt-0 lg:pb-24 ">
            <div class="max-w-lg mx-auto">
                <div id="btnPay">
                    <h2 class="flex justify-center py-40 text-xl">Escolha o Método de Pagamento</h2>
                    <div class="flex justify-center">
                        <div>
                            <button onclick="showTicket()" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded">
                                Boleto
                            </button>
                            <button onclick="showCard()" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded">
                                Cartão 
                            </button>
                        </div>
                    </div>
                </div>

                <div id="paymentCard" style="display: none;" >
                    
                    <h1 class="font-mono text-2xl text-center py-5 bg-white">Pagamento por cartão de crédito</h1>
                    <form class="mt-6"  action="{{ route('paylivre.create') }}" method="POST">
                        @csrf
                        <input type="hidden" >
                        <div class="grid grid-cols-12 gap-y-6 gap-x-4">
                            <div class="col-span-full">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>

                            <div class="col-span-full">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nome no Cartão</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>
                            <div class="col-span-full">
                                <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                                <div class="mt-1">
                                    <input type="text" id="cpf" name="cpf" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                </div>

                            <div class="col-span-full">
                            <label for="card-number" class="block text-sm font-medium text-gray-700">Número do Cartão</label>
                            <div class="mt-1">
                                <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>

                            <div class="col-span-8 sm:col-span-9">
                            <label for="expiration-date" class="block text-sm font-medium text-gray-700">Data Exp. (MM/YY)</label>
                            <div class="mt-1">
                                <input type="text" name="expiration-date" id="expiration-date"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>

                            <div class="col-span-4 sm:col-span-3">
                            <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                            <div class="mt-1">
                                <input type="text" name="cvv" id="cvv" autocomplete="csc" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>
                            <input type="hidden" name="transaction_type" value="card" /> 
                            <input type="hidden" name="transaction_amount" value="{{ $order[0]['amount'] }}" /> 
                            <input type="hidden" name="transaction_installments" value="2" /> 
                        </div>

                        <button type="submit" class="w-full mt-6 bg-green-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-green-500">Pagar R$ {{ formatMoney($order[0]['amount']) }}</button>

                        <p class="flex justify-center text-sm font-medium text-gray-500 mt-6">
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="w-5 h-5 text-gray-400 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            Detalhes de pagamento armazenados em texto simples
                        </p>


                        <div class="flex justify-center mt-10 gap-20"> 
                            <img src="https://i.ibb.co/nQy8Gth/visa.png" alt="Visa" class="h-12 w-30 ">
                            <img src="https://i.ibb.co/zhSQJct/master.png" alt="Master" class="h-12 w-30 ">
                            <img src="https://i.ibb.co/Sy4pSgH/paylivre.png" alt="Master" class="h-12 w-30 ">
                        </div>

                        <div class="flex justify-center mt-5"> 
                            <img src="https://i.ibb.co/DfRjHVT/safe2.webp" alt="Protected" class="h-15 w-30">
                        </div>
                    </form>



                </div>
                

                <div id="paymentTicket" style="display: none;">
                    <h2 class="font-mono text-2xl text-center py-5 bg-white">Pagamento por Boleto</h2>
                    <form class="mt-6" action="{{ route('payment.ticket') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-12 gap-y-6 gap-x-4">
                            <div class="col-span-full">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>

                            <div class="col-span-full">
                            <label for="document" class="block text-sm font-medium text-gray-700">CPF</label>
                            <div class="mt-1">
                                <input type="text" id="document" name="cpf"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>

                            <div class="col-span-full">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>
                            <div class="col-span-full">
                            <label for="address" class="block text-sm font-medium text-gray-700">Endereço</label>
                            <div class="mt-1">
                                <input type="text" id="address" name="address" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                            <label for="address_number" class="block text-sm font-medium text-gray-700">Número</label>
                            <div class="mt-1">
                                <input type="text" name="address_number" id="address_number"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                            <label for="postcode" class="block text-sm font-medium text-gray-700">Cep</label>
                            <div class="mt-1">
                                <input type="text" name="postcode" id="postcode" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                            <label for="address_neighborhood" class="block text-sm font-medium text-gray-700">Bairro</label>
                            <div class="mt-1">
                                <input type="text" name="address_neighborhood" id="address_neighborhood"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                            <label for="address_city" class="block text-sm font-medium text-gray-700">Cidade</label>
                            <div class="mt-1">
                                <input type="text" name="address_city" id="address_city" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                            <label for="address_state" class="block text-sm font-medium text-gray-700">Estado</label>
                            <div class="mt-1">
                                <input type="text" name="address_state" id="address_state"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required >
                            </div>
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                            <label for="address_country" class="block text-sm font-medium text-gray-700">País</label>
                            <div class="mt-1">
                                <input type="text" name="address_country" id="address_country" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            </div>
                            
                        </div>

                        <input type="hidden" name="transaction_type" value="ticket" /> 
                        <input type="hidden" name="order_id" value="{{ $order[0]['id'] }}" /> 
                        <input type="hidden" name="transaction_amount" value="{{ $order[0]['amount'] }}" /> 
                        <input type="hidden" name="transaction_installments" value="2" /> 

                        <button type="submit" class="w-full mt-6 bg-green-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-green-500">Gerar Boleto</button>

                        <p class="flex justify-center text-sm font-medium text-gray-500 mt-6">
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="w-5 h-5 text-gray-400 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            Detalhes de pagamento armazenados em texto simples
                        </p>


                        <div class="flex justify-center mt-10 gap-20"> 
                            <img src="https://i.ibb.co/nQy8Gth/visa.png" alt="Visa" class="h-12 w-30 ">
                            <img src="https://i.ibb.co/zhSQJct/master.png" alt="Master" class="h-12 w-30 ">
                            <img src="https://i.ibb.co/Sy4pSgH/paylivre.png" alt="Master" class="h-12 w-30 ">

                        </div>

                        <div class="flex justify-center mt-5"> 
                            <img src="https://i.ibb.co/DfRjHVT/safe2.webp" alt="Protected" class="h-15 w-30">
                        </div>
                    </form>
                </div>
                
            </div>
        </section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>


function showCard()
{
    $('#paymentCard').removeAttr('style');
    $("#btnPay").hide();
}

function showTicket()
{
    $('#paymentTicket').removeAttr('style');
    $("#btnPay").hide();
}

</script>