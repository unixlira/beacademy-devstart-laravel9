@extends('template.admin')

@section('title', 'Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Usuário</h1>

<figure class="bg-slate-100 rounded-xl p-8 dark:bg-slate-800 bg-[url('{{ url("background/tech.png")}}')] bg-no-repeat ">
  <img class="w-24 h-24 rounded-full mx-auto" src="{{ $user->image}}" alt="{{ $user->name }}" width="384" height="512">
  <div class="pt-6 text-center space-y-4">
    <figcaption class="font-medium py-2">
    <div class="text-white">
      Código: {{ $user->id }}
      </div>
      <div class="text-white">
        Nome: {{ $user->name }}
      </div>
      <div class="text-white">
      Email: {{ $user->email }}
      </div>
    </figcaption>
  </div>
</figure>

<form action="{{ route('users.destroy', $user->id) }}" method="POST" class="py-12">
    @method('DELETE')
    @csrf
    <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" >Deletar</button>
</form>

@endsection