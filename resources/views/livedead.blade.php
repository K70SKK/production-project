<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('How to Handle Evidence: Live or Dead') }}
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-start mt-4">
        <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>

    
    <div class="max-w-2xl mx-auto px-4 py-4">
        <p class="font-semibold text-lg text-gray-800 mb-4">Explanation:</p>
        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
            <p><span class="font-semibold">Live:</span> This means the device is switched on.</p>
            <p><span class="font-semibold">Dead:</span> This means the device is switched off.</p>
        </div>
    </div>

    
    <div class="max-w-2xl mx-auto px-4 py-2">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="font-semibold text-lg text-gray-800 mb-4">Handling Live Evidence:</h3>
            <table class="w-full">
                <tr>
                    <td class="px-4 py-2">1. If the device is live, make notes on what is visible on the screen and the condition of the device.</td>
                    <td class="px-4 py-2">2. Next, make a note of the date and time on the device and the actual date and time.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">3. Make notes on what software the device is running and if there are any applications or tabs open.</td>
                    <td class="px-4 py-2">4. Dump the RAM onto a hard drive and make notes.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2" colspan="2">5. Then turn off the device and remove the battery if possible. Do not disconnect the device from the network or close any applications down; this may trigger the device to wipe or alert the suspect.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2" colspan="2">6. Bag and tag the device with any additional components or hard drives with notes.</td>
                </tr>
            </table>
        </div>
    </div>

    
    <div class="max-w-2xl mx-auto px-4 py-2">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="font-semibold text-lg text-gray-800 mb-4">Handling Dead Evidence:</h3>
            <table class="w-full">
                <tr>
                    <td class="px-4 py-2">1. If the evidence is dead, make notes on the condition of the device.</td>
                    <td class="px-4 py-2">2. Do not attempt to turn it on.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">3. Remove the battery and make notes.</td>
                    <td class="px-4 py-2">4. Bag and tag the device with any additional components with notes.</td>
                </tr>
            </table>
        </div>
    </div>
</x-app-layout>
