@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')

<h1 class="text-3xl font-bold mt-8 text-center">Detalhes do Usuário {{ $user->id }}</h1>
<div class="max-w-7xl mx-auto flex flex-col mt-20 mb-5">

    <ul>
        <li><span class="font-bold">ID:</span> {{ $user->id }}</li>
        <li><span class="font-bold">Name:</span> {{ $user->name }}</li>
        <li><span class="font-bold">Email:</span> {{ $user->email }}</li>
    </ul>
    
    <x-alert/>

</div>

<div class="flex max-w-7xl mx-auto mb-20">
    
    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white text-sm font-bold py-2 px-4 rounded">Remover</button>
    </form>
</div>

@endsection