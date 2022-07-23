@extends('template.admin')

@section('title', "Editar o Produto {$product->name}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Editar o Produto: {{ $product->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('products._partials.form')
</form>

@endsection