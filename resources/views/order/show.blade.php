@extends("template.home")
@section("title", "OS | Ordem {$order->id}}")
@section("body")
    <table class="table table-dark table-hover table-bordered table-striped mt-3">
        <thead class="text-center">
            <tr>
                <th scope="row">Código</th>
                <th class="table-secondary">{{ $order->id }}</th>
            </tr>
            <tr>
                <th scope="row">Nome</th>
                <th class="table-secondary">{{ $order->customer->name }}</th>
            </tr>
            <tr>
                <th scope="row">Dispositivo</th>
                <th class="table-secondary">{{ $order->device }}</th>
            </tr>
            <tr>
                <th scope="row">Marca</th>
                <th class="table-secondary">{{ $order->brand }}</th>
            </tr>
            <tr>
                <th scope="row">Modelo</th>
                <th class="table-secondary">{{ $order->model }}</th>
            </tr>
            <tr>
                <th scope="row">Número de Série</th>
                <th class="table-secondary">{{ $order->serial_number }}</th>
            </tr>
            <tr>
                <th scope="row">Acessórios</th>
                <th class="table-secondary">{{ $order->accessories }}</th>
            </tr>
            <tr>
                <th scope="row">Problema Reportado</th>
                <th class="table-secondary">{{ $order->reported_problem }}</th>
            </tr>
            <tr>
                <th scope="row">Descrição do Serviço</th>
                <th class="table-secondary">{{ $order->service_description }}</th>
            </tr>
            <tr>
                <th scope="row">Observações</th>
                <th class="table-secondary">{{ $order->observations }}</th>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <th class="table-secondary">{{ $order->status }}</th>
            </tr>
            <tr>
                <th scope="row">Valor</th>
                <th class="table-secondary">{{ $order->price }}</th>
            </tr>
        </thead>
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
        </a>
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-danger mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
            </button>
        </form>
    </div>

@endsection