@extends('admin.layouts.app')

@section('title', 'Cadastro de Categorias')

@section('content')

      <h1 class="text-3xl font-bold mt-8 text-center">Cadastrar Nova Categoria</h1>

      <div class="max-w-7xl mx-auto flex flex-col mt-20 mb-20">  
          {{-- Componente de alerta --}}
          <x-alert/> 
          <form action="{{ route('categories.store') }}" method="POST">
              @include('admin.categories.partials.form')
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Cadastrar</button>
          </form>
      </div>

@endsection