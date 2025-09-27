
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Form</title>
</head>
<body>
    <h1>Student Grade Entry</h1>


    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Student Name:</label><br>
            <input type="text" id="name" name="name" required>
        </div>
        <div>

        <label for="subject">Subject:</label><br>
        <select id="dropdown" name="subject" required>
            <option value="">Select Subject</option>
            <option value="math">Math</option>
            <option value="science">Science</option>
            <option value="english">English</option>
        </select><br>
    </div>
         
        <div>
            <label for="marks">Marks (0-100):</label><br>
            <input type="number" id="marks" name="marks" min="0" max="100" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>