<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View User</title>

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 py-4 px-4 bg-gray-50">

    <h1 class="text-3xl font-bold mt-8 text-center">Listagem de Usuários</h1>

    <div class="flex justify-end max-w-7xl mx-auto mt-20">
      <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded">Novo</a>
    </div>

    <div class="max-w-7xl mx-auto flex flex-col mt-4 mb-20">  
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

</body>
</html>