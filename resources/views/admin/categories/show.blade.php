@extends('admin.layouts.app')

@section('title', 'Detalhes da Categoria')

@section('content')

<h1 class="text-3xl font-bold mt-8 text-center">Detalhes da Categoria {{ $category->id }}</h1>
<div class="max-w-7xl mx-auto flex flex-col mt-20 mb-5">

    <ul>
        <li><span class="font-bold">ID:</span> {{ $category->id }}</li>
        <li><span class="font-bold">Name:</span> {{ $category->name }}</li>
        <li><span class="font-bold">Descrição:</span> {{ $category->description }}</li>
        <li><span class="font-bold">Slug:</span> {{ $category->slug }}</li>
        <li><span class="font-bold">Status:</span> {{ $category->status }}</li>
    </ul>
    
    <x-alert/>

</div>

<div class="flex max-w-7xl mx-auto mb-20">
    
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white text-sm font-bold py-2 px-4 rounded">Remover</button>
    </form>
</div>

@endsection