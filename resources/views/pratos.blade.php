<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
                <!-- Listando Pratos-->
        <div class="grid grid-cols-2 lg:grid-cols-4 ">
            <div class="p-3 m-0.5 border rounded-lg bg-green-100 hover:bg-green-200 cursor-pointer" @click="add_modal = true">
                        Adicionar
            </div>
                @foreach(Auth::user()->pratos->sortBy('categoria') as $prato)
                    <div class="p-3 border m-0.5 rounded-lg hover:bg-red-200">
                        {{$prato->descricao}} ({{$prato->categoria}})
                    </div> 
                @endforeach
        </div>
    </div>
</div>