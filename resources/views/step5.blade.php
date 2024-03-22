<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Step 5: Collect Evidence') }}
        </h2>
    </x-slot>
    <textarea class="w-full h-40 border border-gray-300 rounded-md p-2 mt-4 focus:outline-none focus:ring focus:border-blue-300" placeholder="As a first responder collecting digital evidence, it's crucial to document everything you do to maintain the chain of custody.
Handle all evidence with care to avoid any damage.
Take clear and concise notes on what you collect and how.
Document any damage to the evidence.
Bag and tag the evidence, including detailed notes.
Approach the evidence correctly, whether it's live or dead, and follow the appropriate procedures." rows="7" cols="50"></textarea>

<div class="container mx-auto flex justify-start mt-4">
        <a href="{{ route('livedead') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">How to handle Live or dead</a>
    </div>

    <div class="container mx-auto flex justify-center items-start py-12">
        <div class="w-full md:w-1/2">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form method="POST" action="{{ route('step2.store') }}">

                    @csrf
                    <input type="hidden" name="step1_id" value="{{ $step1Id }}">
                    <div class="mb-4">
                        <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                        <textarea name="note" id="note" rows="4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="datetime" class="block text-sm font-medium text-gray-700">Date & Time</label>
                        <input type="datetime-local" id="datetime" name="datetime" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add Note
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  <div class="container mx-auto flex justify-start mt-4">
    <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
</div>

    <div class="container mx-auto flex justify-end mt-4">
        <a href="{{ route('step6') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Next</a>
    </div>

</x-app-layout>