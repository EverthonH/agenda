<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto grid-cols-2 sm:px-6 lg:px-8">
            <div>
                <h1 class="block text-center text-xl pb-3">Pratos</h1>
                @include('pratos')
            </div>
            <div>
                <h1 class="block text-center text-xl pb-3">Agendas</h1>

                @include('agendas')

            </div>
    </div>
</div>
</x-app-layout>
