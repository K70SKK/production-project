<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <h2 class="text-2xl font-semibold mb-4">Change Date and Time</h2>

                   
                    <form method="POST" action="{{ route('changeDateTime') }}">
                    
                        @csrf

                        
                        <div class="mt-4">
                            <x-input-label for="new_date" :value="__('New Date')" />
                            <x-text-input id="new_date" class="block mt-1 w-full" type="text" name="new_date"
                                required value="{{ now()->format('d/m/Y') }}" />
                            <x-input-error :messages="$errors->get('new_date')" class="mt-2" />
                        </div>

                      
                        <div class="mt-4">
                            <x-input-label for="new_time" :value="__('New Time')" />
                            <x-text-input id="new_time" class="block mt-1 w-full" type="text" name="new_time"
                                required value="{{ now()->format('H:i') }}" />
                            <x-input-error :messages="$errors->get('new_time')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Change Date and Time') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
