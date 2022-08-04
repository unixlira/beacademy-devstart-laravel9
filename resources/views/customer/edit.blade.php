@extends("template.home")
@section("title", "OS | Editar Cliente")
@section("body")
    <h1 class="mt-3 d-md-flex justify-content-md-center">EDITAR CLIENTE</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @method("PUT")
        @csrf
        <div class="mb-2">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}">
        </div>
        <div class="mb-2">
            <label for="nickname" class="form-label">Apelido:</label>
            <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $customer->nickname }}">
        </div>
        <div class="mb-2">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $customer->cpf }}">
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $customer->email }}">
        </div>
        <div class="mb-2">
            <label for="phone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}">
        </div>
        <div class="mb-2">
            <label for="birthday" class="form-label">Data de Aniversário:</label>
            <input type="text" class="form-control" id="birthday" name="birthday" value="{{ $customer->birthday }}">
        </div>
        <div class="mb-2">
            <label for="address" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $customer->address }}">
        </div>
        <div class="mb-2">
            <label for="district" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="district" name="district" value="{{ $customer->district }}">
        </div>
        <div class="mb-2">
            <label for="city" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $customer->city }}">
        </div>
        <div class="mb-2">
            <label for="state" class="form-label">Estado:</label>
            <input type="text" class="form-control" id="state" name="state" value="{{ $customer->state }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Confirmar</button>
    </form>
@endsection