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
        value="{{ $category->name ?? old('name') }}">
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
      Slug
    </label>
    <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="slug"
        name="slug"
        type="text"
        placeholder="Slug"
        value="{{ $category->slug ?? old('slug') }}">
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
      Descrição
    </label>
    <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="description"
        name="description"
        type="text"
        placeholder="Descrição"
        value="{{ $category->description ?? old('description') }}">
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
      Status
    </label>
    {{-- <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="status"
        name="status"
        type="text"
        placeholder="Status"
        value="{{ $category->status ?? old('status') }}">  --}}
    
    {{-- <input id="on" class="peer/on" type="radio" name="status" value="{{ $category->status ?? old('status') }}" checked />
    <label for="on" class="peer-checked/on:text-sky-500">1</label>

    <input id="off" class="peer/off ml-4" type="radio" name="status" value="{{ $category->status ?? old('status') }}" />
    <label for="off" class="peer-checked/off:text-sky-500">0</label>

    <div class="hidden peer-checked/on:block mt-1">Post visíveis</div>
    <div class="hidden peer-checked/off:block mt-1">Posts NÂO serão visíveis</div> --}}

    <!-- Radio button for status "1" (Active) -->
    <input id="on" class="peer/on" type="radio" name="status" value="1" {{ (($category->status ?? old('status')) == 1) ? 'checked' : '' }} />
    <label for="on" class="peer-checked/on:text-sky-500">Ativa</label>

    <!-- Radio button for status "0" (Inactive) -->
    <input id="off" class="peer/off ml-4" type="radio" name="status" value="0" {{ (($category->status ?? old('status')) == 0) ? 'checked' : '' }} />
    <label for="off" class="peer-checked/off:text-sky-500">Inativa</label>

    <!-- Conditional display messages -->
    <div class="hidden peer-checked/on:block mt-1">Posts serão visíveis</div>
    <div class="hidden peer-checked/off:block mt-1">Posts NÃO serão visíveis</div>


</div>