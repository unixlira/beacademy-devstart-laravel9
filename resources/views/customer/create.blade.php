@extends("template.home")
@section("title", "OS | Cadastrar")
@section("body")
    <h1 class="mt-3 d-md-flex justify-content-md-center">CADASTRAR NOVO CLIENTE</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-2">
            <label for="nickname" class="form-label">Apelido:</label>
            <input type="text" class="form-control" id="nickname" name="nickname">
        </div>
        <div class="mb-2">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-2">
            <label for="phone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-2">
            <label for="birthday" class="form-label">Data de Aniversário:</label>
            <input type="text" class="form-control" id="birthday" name="birthday">
        </div>
        <div class="mb-2">
            <label for="address" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-2">
            <label for="district" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="district" name="district">
        </div>
        <div class="mb-2">
            <label for="city" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-2">
            <label for="state" class="form-label">Estado:</label>
            <input type="text" class="form-control" id="state" name="state">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    </form>
@endsection