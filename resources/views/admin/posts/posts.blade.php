@extends('admin.layouts.app')

@section('title', 'Listagem de Categorias')

@section('content')

    <h1 class="text-3xl font-bold mt-8 text-center">Listagem de Posts</h1>

    <div class="flex justify-end max-w-7xl mx-auto mt-20">
      <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Novo</a>
    </div>

    <div class="max-w-7xl mx-auto flex flex-col mt-4 mb-20">

      {{-- Componente de alerta --}}
      <x-alert/>

      <table class="table-auto">
          <thead class="text-left bg-gray-300">
              <tr>
                  <th class="px-4 py-2">Id</th>
                  <th class="px-4 py-2">Título</th>
                  <th class="px-4 py-2">Slug</th>
                  <th class="px-4 py-2">Conteúdo</th>
                  <th class="px-4 py-2">Autor</th>
                  <th class="px-4 py-2">Categoria</th>
                  <th class="px-4 py-2 text-center">Ações</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($posts as $post)
                  <tr class="border-b bg-gray-100">
                      <td class="px-4 py-2">{{ $post->id }}</td>
                      <td class="px-4 py-2">{{ $post->title }}</td>
                      <td class="px-4 py-2">{{ $post->slug }}</td>
                      <td class="px-4 py-2">{{ $post->body }}</td>
                      <td class="px-4 py-2">{{ $post->user->name }}</td>
                      <td class="px-4 py-2">{{ $post->category->name }}</td>
                      <td class="px-4 py-2 mb-2 text-center">
                        <a href="{{ route('posts.show', $post->id) }}" class="bg-blue-300 hover:bg-blue-500 text-white text-sm font-bold py-2 px-4 rounded">Detalhes</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Editar</a>
                    </td>
                  </tr>
              @empty
                  <tr>
                      <td colspan="3">Nenhum registro encontrado</td>
                  </tr>
              @endforelse
          </tbody>
      </table>
    </div>

@endsection