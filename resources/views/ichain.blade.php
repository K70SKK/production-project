<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Maintaining Chain of Custody') }}
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-start mt-4">
        <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>

    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <table class="w-full">        
                      
                <tr>
                    <td colspan="2" class="px-4 py-2 font-semibold">Maintaining Chain of Custody:</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2">Once evidence is identified, note its location, condition, and any relevant details.</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2">Use tamper proof bags or containers to store evidence securely.</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2">Assign unique identification numbers or labels to each piece of evidence.</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2">Record every transfer or handling of evidence, including who had custody and when.</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2">Ensure that only authorised personnel have access to the evidence.</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2">Ensure that you do no work on evidence on work on copys or use a write blocker.</td>
                </tr>
            </table>
            
          
</x-app-layout>
