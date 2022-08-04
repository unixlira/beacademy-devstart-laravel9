@extends("template.home")
@section("tile", "OS | Ordens")
@section("body")
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3 mt-3">
            Criar
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </a>
    </div>

    <table class="table table-dark table-hover table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">OS</th>
                <th scope="col">Cliente</th>
                <th scope="col">Status</th>
                <th scope="col">Valor</th>
                <th scope="col">Detalhes</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($orders as $order)
                <tr>
                    <th>{{ $order->id }}</th>
                    <th>{{ $order->customer->name }}</th>
                    <th>{{ $order->status }}</th>
                    <th>R${{ $order->price }}</th>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-outline-primary btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination success">
        {{ $orders->links("pagination::bootstrap-4") }}
    </div>
@endsection