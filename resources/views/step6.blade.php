<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Step 6: Photograph the collected Evidence') }}
        </h2>
    </x-slot>

    <textarea class="w-full h-40 border border-gray-300 rounded-md p-2 mt-4 focus:outline-none focus:ring focus:border-blue-300" placeholder="Photograph any evidence you have collected and baged and taged with notes to notes to ensure the chain of custody.
     Take clear photographs.
     Ensure photographs are taken in clear lighting conditions.
     This will ensure chain of custody" rows="3" cols="10"></textarea>

     <div class="container mx-auto flex justify-start mt-4">
        <a href="{{ route('chain') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Chain of custody</a>
    </div>

     <div class="container mx-auto flex justify-center items-start py-12">
    <div class="w-full md:w-1/2">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form id="noteForm" method="POST" action="{{ route('step2.store') }}" enctype="multipart/form-data">
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
                <div class="mb-4" id="photoContainer"></div>
                <label for="camera" class="block text-sm font-medium text-gray-700">Capture Photo</label>
                <video id="camera" width="100%" height="auto" autoplay></video>
                <canvas id="photoCanvas" style="display: none;"></canvas>
                <button id="captureButton" class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="capturePhoto()">Take Photo</button>
                <button id="retakeButton" class="mt-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" style="display: none;" onclick="retakePhoto()">Retake</button>
                <input type="hidden" name="image" id="imageInput">
            </form>
        </div>
    </div>
</div>

<div class="container mx-auto flex justify-start mt-4">
    <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
</div>

<div class="container mx-auto flex justify-end mt-4">
    <button type="button" id="addNoteButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Note
    </button>
    <a href="{{ route('step7') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Next</a>
</div>

<script>
    const video = document.getElementById('camera');
    const canvas = document.getElementById('photoCanvas');
    const captureButton = document.getElementById('captureButton');
    const retakeButton = document.getElementById('retakeButton');
    const imageInput = document.getElementById('imageInput');
    const addNoteButton = document.getElementById('addNoteButton');
    const noteForm = document.getElementById('noteForm');
    const photoContainer = document.getElementById('photoContainer');
    let photoCaptured = false; // Flag to track whether a photo is captured

    // Function to capture photo from camera
    function capturePhoto() {
        console.log('Capture photo button clicked');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
        const imageDataURL = canvas.toDataURL('image/png');
        imageInput.value = imageDataURL;
        captureButton.style.display = 'none';
        retakeButton.style.display = 'block';
        addNoteButton.disabled = false;
        // Display the captured photo
        const photo = document.createElement('img');
        photo.src = imageDataURL;
        photoContainer.innerHTML = '';
        photoContainer.appendChild(photo);
        photoCaptured = true;
    }

    // Function to retake photo
    function retakePhoto() {
        console.log('Retake photo button clicked');
        imageInput.value = '';
        captureButton.style.display = 'block';
        retakeButton.style.display = 'none';
        addNoteButton.disabled = true;
        photoContainer.innerHTML = ''; // Clear previously captured photo
        photoCaptured = false;
    }

    // Capture photo when "Capture Photo" button is clicked
    captureButton.addEventListener('click', function() {
        capturePhoto();
    });

    // Retake photo when "Retake" button is clicked
    retakeButton.addEventListener('click', function() {
        retakePhoto();
    });

    // Submit form when "Add Note" button is clicked
    addNoteButton.addEventListener('click', function() {
        console.log('Add Note button clicked');
        if (photoCaptured) {
            console.log('Form submitted');
            noteForm.submit(); // Submit the form if image is captured
        } else {
            console.log('Please capture a photo before adding a note.');
        }
    });

    // Prevent default form submission behavior
    noteForm.addEventListener('submit', function(event) {
        console.log('Form submitted');
        event.preventDefault(); // Prevent default form submission
        // Form submission logic here (not needed if using addNoteButton event listener)
    });

    // Access user's camera and display video stream
    navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
        .then(function(stream) {
            video.srcObject = stream;
        })
        .catch(function(err) {
            console.error('Error accessing camera: ' + err);
        });
</script>


</x-app-layout>