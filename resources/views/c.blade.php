<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Your Cases') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($step1Data as $step1)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 flex justify-between items-center">
                            <p class="text-lg font-semibold mb-4">Case Number: {{ $step1->case_number }}</p>
                            <a href="{{ route('cs.show', ['case_number' => $step1->case_number]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ route('home') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
        </div>
    </div>
</x-app-layout>
