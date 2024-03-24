<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold mb-4">Case Details</h1>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td class="font-semibold">Case Number:</td>
                                <td>{{ $step1Data->case_number }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">First Responder Name:</td>
                                <td>{{ $step1Data->first_responder_name }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Company Name:</td>
                                <td>{{ $step1Data->company_data }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Time Case Created:</td>
                                <td>{{ $step1Data->time }}</td>
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mt-6">
                <h2 class="text-3xl font-bold mb-4">Notes Collected</h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="font-semibold text-left">Note</th>
                                <th class="font-semibold text-left">Date and Time</th>
                                <th class="font-semibold text-left">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($step2Data as $step2)
                            <tr>
                                <td class="text-left">{{ $step2->note }}</td>
                                <td class="text-left">{{ $step2->datetime }}</td>
                                <td class="text-left">
                                    @if ($step2->image)
                                    <img src="{{ asset($step2->image) }}" alt="Step 2 Image" class="h-16">
                                    @else
                                    N/A
                                    @endif
                                </td>                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">    
    <a href="{{ route('c') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
</x-app-layout>
