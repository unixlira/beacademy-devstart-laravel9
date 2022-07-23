@extends('template.admin')

@section('title', 'Novo Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Pedido</h1>

@include('includes.validations-form')

<form action="{{ route('orders.store') }}" method="post" enctype="multipart/form-data">
    @include('orders._partials.form')
</form>

@endsection 