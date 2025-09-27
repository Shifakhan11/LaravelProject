<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <h1>Student Result</h1>

    <div>
        <p><strong>Name:</strong> {{ $result->name }}</p>
        <p><strong>Subject:</strong> {{ $result->subject }}</p>
        <p><strong>Marks:</strong> {{ $result->marks }}</p>
        <p><strong>Grade:</strong> {{ $result->grade }}</p>
        <p><strong>Status:</strong> {{ $result->status }}</p>
        <p><strong>Remarks:</strong> {{ $result->remarks }}</p>
    </div>
</body>
</html>