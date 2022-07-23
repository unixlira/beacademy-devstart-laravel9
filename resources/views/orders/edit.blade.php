@extends('template.admin')

@section('title', "Editar o Pediso {$order->name}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Editar o Pedido Nº:  {{ $order->id }}</h1>

@include('includes.validations-form')

<form action="{{ route('orders.update', $order->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('orders._partials.form')
</form>

@endsection