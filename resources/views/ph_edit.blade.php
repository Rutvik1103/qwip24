<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Edit Hero</h1>
<form action="{{ route('hero.update', $hero->id) }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" value="{{ $hero->title }}" required><br><br>

    <label>Description:</label>
    <textarea name="description" required>{{ $hero->description }}</textarea><br><br>

    <label>Button Text:</label>
    <input type="text" name="button_text" value="{{ $hero->button_text }}"><br><br>

    <label>Image URL:</label>
    <input type="text" name="image_url" value="{{ $hero->image_url }}"><br><br>

    <button type="submit">Update Hero</button>
</form>
    
</body>
</html>