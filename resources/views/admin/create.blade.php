@extends('admin.layouts.app')

@section('title', 'Cadstro de Usuários')

@section('content')

      <h1 class="text-3xl font-bold mt-8 text-center">Cadastrar Novo Usuários</h1>

      <div class="max-w-7xl mx-auto flex flex-col mt-20 mb-20">  
          @if ($errors->any())
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Ocorreu um erro
            </div>
            <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-2 text-red-700">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
          @endif
          <form action="{{ route('users.store') }}" method="POST">
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
                      value="{{ old('name') }}">           
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                  </label>
                  <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      id="email"
                      name="email"
                      type="text"
                      placeholder="E-mail"
                      value="{{ old('email') }}">         
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Senha
                  </label>
                  <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      id="password"
                      name="password"
                      type="text"
                      placeholder="Senha">
              </div>
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Cadastrar</button>
          </form>
      </div>

@endsection