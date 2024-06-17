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

    <h1 class="text-3xl font-bold mt-8 text-center">Cadastrar Novo Usuários</h1>


    <div class="max-w-7xl mx-auto flex flex-col mt-20 mb-20">  

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
                placeholder="Nome">
            
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
              Email
            </label>
            <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email"
                name="email"
                type="text"
                placeholder="E-mail">
            
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

</body>
</html>