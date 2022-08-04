@extends("template.home")
@section("title", "OS | Criar Ordem")
@section("body")
    <h1 class="mt-3 d-md-flex justify-content-md-center">CRIAR NOVA ORDEM</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="customer_id" class="form-label">Cliente:</label>
            <select class="form-select" aria-label="Default select example" name="customer_id">
                <option selected>Escolha um cliente</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="device" class="form-label">Dispositivo:</label>
            <input type="text" class="form-control" id="device" name="device">
        </div>
        <div class="mb-2">
            <label for="brand" class="form-label">Marca:</label>
            <input type="text" class="form-control" id="brand" name="brand">
        </div>
        <div class="mb-2">
            <label for="model" class="form-label">Modelo:</label>
            <input type="text" class="form-control" id="model" name="model">
        </div>
        <div class="mb-2">
            <label for="serial_number" class="form-label">Número de Série:</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number">
        </div>
        <div class="mb-2">
            <label for="accessories" class="form-label">Acessórios:</label>
            <input type="text" class="form-control" id="accessories" name="accessories">
        </div>
        <div class="mb-2">
            <label for="reported_problem" class="form-label">Problema Reclamado:</label>
            <textarea type="text" class="form-control" id="reported_problem" name="reported_problem"></textarea>
        </div>
        <div class="mb-2">
            <label for="service_description" class="form-label">Descrição do Serviço:</label>
            <textarea type="text" class="form-control" id="service_description" name="service_description"></textarea>
        </div>
        <div class="mb-2">
            <label for="observations" class="form-label">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations"></textarea>
        </div>
        <div class="mb-2">
            <label for="status" class="form-label">Status:</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>
        <div class="mb-2">
            <label for="price" class="form-label">Valor do Serviço:</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Criar</button>
    </form>
@endsection