<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Help') }}
        </h2>
    </x-slot>

    <textarea class="w-full h-40 border border-gray-300 rounded-md p-2 mt-4 focus:outline-none focus:ring focus:border-blue-300" placeholder="How to use:
If you wish to start a case, use option 1 on the Home Page.
To view a case, select option 2 on the Home Page.
If you want to familiarise yourself with each step and train, choose option 3 on the Home Page.
You can change your password by clicking on your name at the top right and selecting 'Profile'.
Remember never to share any details about cases or your login information, and always log out when you're done."></textarea>

<div class="text-left">
    <a href="{{ route('home') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Home</a>
</div>



</x-app-layout>