<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Edit Solution</h1>
<form action="{{ route('solution.update', $solution->id) }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" value="{{ $solution->title }}" required><br><br>

    <label>Description:</label>
    <textarea name="description" required>{{ $solution->description }}</textarea><br><br>

    <button type="submit">Update Solution</button>
</form>

</body>
</html>