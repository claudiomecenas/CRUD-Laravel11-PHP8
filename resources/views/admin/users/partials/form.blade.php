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
        value="{{ $user->name ?? old('name') }}">           
    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
      Email
    </label>
    <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="email"
        name="email"
        type="text"
        placeholder="E-mail"
        value="{{ $user->email ?? old('email') }}">         
    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
      Senha
    </label>
    <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="password"
        name="password"
        type="text"
        placeholder="Senha">
</div>