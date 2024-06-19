@extends('admin.layouts.app')

@section('title', 'Listagem de Categorias')

@section('content')

        <h1 class="text-3xl font-bold mt-8 text-center">Listagem de Categorias</h1>

        <div class="flex justify-end max-w-7xl mx-auto mt-20">
            <a href="{{ route('categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Nova Categoria</a>
        </div>

        <div class="max-w-7xl mx-auto flex flex-col mt-4 mb-20">

                {{-- Componente de alerta --}}
                <x-alert/>

                <table class="table-auto">
                    <thead class="text-left bg-gray-300">
                        <tr>
                            <th class="px-4 py-2">Id</th>
                            <th class="px-4 py-2">Nome</th>
                            <th class="px-4 py-2">Descrição</th>
                            <th class="px-4 py-2">Slug</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr class="border-b bg-gray-100">
                                <td class="px-4 py-2">{{ $category->id }}</td>
                                <td class="px-4 py-2">{{ $category->name }}</td>
                                <td class="px-4 py-2">{{ $category->description }}</td>
                                <td class="px-4 py-2">{{ $category->slug }}</td>
                                <td class="px-4 py-2">{{ $category->status }}</td>
                                <td class="px-4 py-2 mb-2 text-center">
                                    <a href="{{ route('categories.show', $category->id) }}" class="bg-blue-300 hover:bg-blue-500 text-white text-sm font-bold py-2 px-4 rounded">Detalhes</a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Editar</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Nenhum usuário encontrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
             <div class="py-2">{{ $categories->links() }}</div>
        </div>

@endsection