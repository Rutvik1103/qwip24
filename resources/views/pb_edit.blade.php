<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Edit Benefit</h1>
<form action="{{ route('benefit.update', $benefit->id) }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" value="{{ $benefit->title }}" required><br><br>

    <label>Description:</label>
    <textarea name="description" required>{{ $benefit->description }}</textarea><br><br>

    <label>Image URL:</label>
    <input type="text" name="image_url" value="{{ $benefit->image_url }}"><br><br>

    <button type="submit">Update Benefit</button>
</form>
    
</body>
</html>