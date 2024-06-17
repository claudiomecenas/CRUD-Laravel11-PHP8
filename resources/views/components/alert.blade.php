@if (session()->has('success'))
    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('message'))
    <div class="bg-yellow-500 text-white font-bold rounded-t px-4 py-2">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
        {{ session('error') }}
    </div>
@endif

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