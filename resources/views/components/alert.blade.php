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

@if (session()->has('success'))
    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
        {{ session('success') }}
    </div>
@endif