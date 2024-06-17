@extends('admin.layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')

        <h1 class="text-3xl font-bold mt-8 text-center">Listagem de Usuários</h1>

        <div class="flex justify-end max-w-7xl mx-auto mt-20">
            <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Novo</a>
        </div>

        <div class="max-w-7xl mx-auto flex flex-col mt-4 mb-20">
                @if (session()->has('success'))
                    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table-auto">
                    <thead class="text-left bg-gray-300">
                        <tr>
                            <th class="px-4 py-2">Id</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr class="border-b bg-gray-100">
                                <td class="px-4 py-2">{{ $user->id }}</td>
                                <td class="px-4 py-2">{{ $user->name }}</td>
                                <td class="px-4 py-2">{{ $user->email }}</td>
                                <td class="px-4 py-2 mb-2 text-center">
                                    {{-- {{ route('admin.users.edit', $user->id) }}
                                    {{ route('admin.users.destroy', $user->id) }} --}}
                                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">...</a>
                                    <a href="#" class="bg-red-500 hover:bg-red-700 text-white text-sm font-bold py-2 px-4 rounded">X</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Nenhum usuário encontrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            <div class="py-2">{{ $users->links() }}</div>
        </div>

@endsection