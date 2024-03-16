<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('How to Identify Digital Evidence') }}
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-start mt-4">
    <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
</div>


    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <table class="w-full">
                <tr>
                    <td class="px-4 py-2">1. Inspect every part of the scene. Familiarise yourself with the environment, locating potential spots to hide evidence.</td>
                    <td class="px-4 py-2">2. Start from one side of the scene and work your way along. Avoid rushing.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">3. Check behind shelves or tables.</td>
                    <td class="px-4 py-2">4. Search inside drawers or cabinets.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">5. Examine books or items that could be hollow.</td>
                    <td class="px-4 py-2">6. Check in between clothes and personal belongings, which can conceal items.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">7. Use a torch if the scene is dark.</td>
                    <td class="px-4 py-2">8. Evidence can be in plain sight, such as ordinary items.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">9. Look for USB sticks, CDs, and hard drives.</td>
                    <td class="px-4 py-2">10. Examine sunglasses, as they may conceal digital devices.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">11. Inspect keyrings for digital items.</td>
                    <td class="px-4 py-2">12. Examine pens.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">13. Look at battery packs, as they may contain digital evidence.</td>
                    <td class="px-4 py-2">14. To spot these items, consider their location, size, and presence of ports for charging.</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2">15. Ensure to thoroughly search for all digital evidence, as they could be hidden in plain sight or everyday items.</td>
                </tr>
            </table>
            
            <p class="mt-4 text-gray-700 text-center">Here are some examples:</p>

            <div class="mt-2 grid grid-cols-2 gap-4">
                <div class="text-center w-full">
                    <img src="{{ asset('images/usb.png') }}" alt="USB Stick" class="w-32 rounded-lg shadow-md mx-auto">
                    <p class="text-gray-600 text-sm mt-2">USB Stick</p>
                </div>
                <div class="text-center w-full">
                    <img src="{{ asset('images/sung.png') }}" alt="Sunglasses" class="w-32 rounded-lg shadow-md mx-auto">
                    <p class="text-gray-600 text-sm mt-2">Sunglasses</p>
                </div>
                <div class="text-center w-full">
                    <img src="{{ asset('images/pen.png') }}" alt="USB Pen" class="w-32 rounded-lg shadow-md mx-auto">
                    <p class="text-gray-600 text-sm mt-2">Pen</p>
                </div>
                <div class="text-center w-full">
                    <img src="{{ asset('images/lip.png') }}" alt="Lipstick" class="w-32 rounded-lg shadow-md mx-auto">
                    <p class="text-gray-600 text-sm mt-2">Lipstick</p>
                </div>
                <div class="text-center w-full">
                    <img src="{{ asset('images/keyring.png') }}" alt="USB keyring" class="w-32 rounded-lg shadow-md mx-auto">
                    <p class="text-gray-600 text-sm mt-2">Keyring</p>
                </div>
                <div class="text-center w-full">
                    <img src="{{ asset('images/hide.png') }}" alt="book" class="w-32 rounded-lg shadow-md mx-auto">
                    <p class="text-gray-600 text-sm mt-2">Hallow Book</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
