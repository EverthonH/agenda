<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ add_modal: false }">
        <div class="max-w-7xl mx-auto grid-cols-2 sm:px-6 lg:px-8">
            <div>
                <h1 class="block text-center text-xl pb-3">Pratos</h1>
                @include('pratos')
            </div>
            <div>
                <h1 class="block text-center text-xl pb-3">Agendas</h1>
                    

            </div>
    </div>


        <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="add_modal">
          <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!--
              Background overlay, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="p-3">
                    <h1>Adicionar prato</h1>
                    <form action="{{route('add-prato')}}" method="POST">
                        @csrf
                        
                            <div>
                                <x-label for="descricao" :value="__('Descricao')" />

                                <x-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required />
                            </div>
                            <div>
                                <x-label for="categoria" :value="__('Categoria')" />

                                <x-input id="categoria" class="block mt-1 w-full" type="text" name="categoria" :value="old('categoria')" required />
                            </div>
                            <a class="underline text-sm text-red-600 hover:text-red-900" href="{{ route('login') }}"@click="add_modal=false">
                                {{ __('Cancelar') }}
                            </a>
                            <x-button class="ml-4">
                                 {{ __('Adicionar') }}
                            </x-button>

                    </form>
                </div>

            </div>
          </div>
        </div>
</div>
</x-app-layout>
