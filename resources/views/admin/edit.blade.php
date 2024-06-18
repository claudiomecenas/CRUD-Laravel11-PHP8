@extends('admin.layouts.app')

@section('title', 'Cadstro de Usuários')

@section('content')

      <h1 class="text-3xl font-bold mt-8 text-center">Editar Usuários</h1>

      <div class="max-w-7xl mx-auto flex flex-col mt-20 mb-20">  
        {{-- Componente de alerta --}}
        <x-alert/> 
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">             
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                  Nome
                </label>
                <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Nome"
                    value="{{ $user->name }}">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                  Email
                </label>
                <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email"
                    name="email"
                    type="text"
                    placeholder="E-mail"
                    value="{{ $user->email }}">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                  Senha
                </label>
                <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password"
                    name="password"
                    type="text"
                    placeholder="Senha"
                    {{-- value="{{ $user->password }}" --}}
                    >

            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Atualizar</button>
        </form>
    </div>

@endsection