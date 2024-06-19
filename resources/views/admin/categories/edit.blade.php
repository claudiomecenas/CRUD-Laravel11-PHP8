@extends('admin.layouts.app')

@section('title', 'Editar Categoria')

@section('content')

      <h1 class="text-3xl font-bold mt-8 text-center">Editar Categoria</h1>

      <div class="max-w-7xl mx-auto flex flex-col mt-20 mb-20">  
        {{-- Componente de alerta --}}
        <x-alert/> 
        <form action="{{ route('categories.update', $user->id) }}" method="POST">
            @method('PUT')
            @include('admin.categories.partials.form')
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Atualizar</button>
        </form>
    </div>

@endsection