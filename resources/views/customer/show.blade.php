@extends("template.home")
@section("title", "OS | Clientes")
@section("body")
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('orders.create', $customer->order) }}" class="btn btn-primary mb-3 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
            Criar Ordem
        </a>
    </div>

    <table class="table table-dark table-hover table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th scope="row">Código</th>
                <th class="table-secondary">{{ $customer->id }}</th>
            </tr>
            <tr>
                <th scope="row">Nome</th>
                <th class="table-secondary">{{ $customer->name }}</th>
            </tr>
            <tr>
                <th scope="row">Apelido</th>
                <th class="table-secondary">{{ $customer->nickname }}</th>
            </tr>
            <tr>
                <th scope="row">CPF</th>
                <th class="table-secondary">{{ $customer->cpf }}</th>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <th class="table-secondary">{{ $customer->email }}</th>
            </tr>
            <tr>
                <th scope="row">Telefone</th>
                <th class="table-secondary">{{ $customer->phone }}</th>
            </tr>
            <tr>
                <th scope="row">Aniversário</th>
                <th class="table-secondary">{{ date("d/m/Y", strtotime($customer->birthday)) }}</th>
            </tr>
            <tr>
                <th scope="row">Endereço</th>
                <th class="table-secondary">{{ $customer->address }}</th>
            </tr>
            <tr>
                <th scope="row">Bairro</th>
                <th class="table-secondary">{{ $customer->district }}</th>
            </tr>
            <tr>
                <th scope="row">Cidade</th>
                <th class="table-secondary">{{ $customer->city }}</th>
            </tr>
            <tr>
                <th scope="row">Estado</th>
                <th class="table-secondary">{{ $customer->state }}</th>
            </tr>           
        </thead>
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
        </a>
        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
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