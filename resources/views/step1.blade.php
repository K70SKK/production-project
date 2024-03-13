<form method="POST" action="{{ route('step1.store') }}">
    @csrf
    <label for="first_responder_name">First Responder Name:</label>
    <input type="text" id="first_responder_name" name="first_responder_name"><br>

    <label for="company_data">Company Data:</label>
    <input type="text" id="company_data" name="company_data"><br>

    <label for="time">Time:</label>
    <input type="datetime-local" id="time" name="time"><br>

    <label for="case_number">Case Number:</label>
    <input type="text" id="case_number" name="case_number"><br>

    <button type="submit">Submit</button>
</form>