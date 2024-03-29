<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SKyShield') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
    This First Responder Application for collecting digital evidence is designed by SK. By accessing and using this application, you acknowledge and agree to adhere strictly to laws and regulations in your jurisdiction.<br>

    <br>Legal Compliance:<br>
    Users are responsible for ensuring that their use of this application complies with all laws regarding the collection and handling of digital evidence.<br>

    <br>ACPO Guidelines:<br>
    Users must adhere to the guidelines established by the Association of Chief Police Officers (ACPO) or any other relevant law enforcement standards applicable in their jurisdiction.<br>

    <br>Abstinence from Alcohol and Drugs:<br>
    Users are strictly prohibited from using this application while under the influence of alcohol or drugs. If under the influence refrain from using the application until you are in an appropriate condition. Being intoxicated will lead to impaired judgment, this will compromise the accuracy and integrity of the digital evidence collection process.<br>

    <br>By proceeding to use this First Responder Application, you acknowledge that you have read, understood, and agreed to comply with the terms and conditions outlined in this disclaimer. Failure to adhere to these guidelines may result in legal consequences and disciplinary actions.<br>
    
    <div class="flex justify-center">    
    <a href="{{ route('home') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Continue</a>
    </div>
</div>

            </div>
        </div>
    </div>
</x-app-layout>
