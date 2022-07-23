@extends('template.admin')

@section('title', 'Novo Produto')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Produto</h1>

@include('includes.validations-form')

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @include('products._partials.form')
</form>

@endsection 