<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Familiarise Yourself with the Steps') }}
        </h2>
    </x-slot>
    <div class="text-left">
    <a href="{{ route('home') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Home</a>
</div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Chain Of Custody.
                </div>
            </div>
        </div>
        <div class="flex justify-center">    
            <a href="{{ route('ichain') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go</a>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    How to Look for Evidence.
                </div>
            </div>
        </div>
        <div class="flex justify-center">    
            <a href="{{ route('ihowlook') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go</a>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    How to Handle Evidencec: Live and Dead.
                </div>
            </div>
        </div>
        <div class="flex justify-center">    
            <a href="{{ route('ihowlook') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go</a>
        </div>
    </div>

    @for($i = 1; $i <= 7; $i++)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Step {{ $i }}.
                    </div>
                </div>
            </div>
            <div class="flex justify-center">    
                <a href="{{ route($i . 'step') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go</a>
            </div>
        </div>
    @endfor
</x-app-layout>
