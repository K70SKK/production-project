<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Step 1: Case Details') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-100">
        <div class="container mx-auto flex justify-center items-start py-12"> <!-- Increased py-12 for top padding -->
            <div class="w-full md:w-1/2">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <form method="POST" action="{{ route('step1.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="first_responder_name" class="block text-sm font-medium text-gray-700">First Responder Name</label>
                            <input type="text" name="first_responder_name" id="first_responder_name" autocomplete="given-name" value="Sikandar Ahmed" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="company_data" class="block text-sm font-medium text-gray-700">Company Data</label>
                            <input type="text" name="company_data" id="company_data" autocomplete="organization" value="LBU" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                            <input type="datetime-local" id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="case_number" class="block text-sm font-medium text-gray-700">Case Number</label>
                            <input type="text" id="case_number" name="case_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mx-auto flex justify-end mt-4">
            <a href="{{ route('step2') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Next</a>
        </div>
    </div>
    
</x-app-layout>
