<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Done---do not share any infromation or data found.') }}
        </h2>
    </x-slot>
    <div class="flex justify-center">    
    <a href="{{ route('home') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Finshed</a>
    </div>
</x-app-layout>