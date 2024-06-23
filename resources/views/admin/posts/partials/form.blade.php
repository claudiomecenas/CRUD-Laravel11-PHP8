@csrf
<div class="mb-4">
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
      Título
    </label>
    <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="title"
        name="title"
        type="text"
        placeholder="Título"
        value="{{ $post->title ?? old('title') }}">
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
      Slug
    </label>
    <input class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="slug"
        name="slug"
        type="text"
        placeholder="Slug"
        value="{{ $post->slug ?? old('slug') }}">
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
      Conteúdo
    </label>
    <textarea class="mb-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="body"
        name="body"
        rows="20"
        placeholder="Conteúdo">
        {{ $post->body ?? old('body') }}</textarea>

    <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
        Categoria
    </label>
    <div class="mb-4">
        @foreach($categories as $category)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category_id" id="category_{{ $category->id }}" value="{{ $category->id }}"
                {{ (isset($post) && $post->category_id == $category->id) ? 'checked' : '' }} required>
            <label class="form-check-label" for="category_{{ $category->id }}">
                {{ $category->name }}
            </label>
        </div>
        @endforeach
    </div>
    <label class="block text-gray-700 text-sm font-bold mb-2" for="user_id">
         Autor: <span class="font-normal">{{ $user->name }}</span>
    </label>
    <input hidden id="user_id" name="user_id" type="text" value="{{ $user->id }}">

</div>