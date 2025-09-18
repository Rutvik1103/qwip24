<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="{{asset('css/platform.css')}}">
</head>
<body>
 

    <!-- Hero Form -->
 <div class="form-container">
    <div class="form-box">
      <h1>First Part</h1>
        <form action="{{ route('hero.store') }}" method="POST">
            @csrf
            <label>Title:</label>
            <input type="text" name="title" required>
            
            <label>Description:</label>
            <textarea name="description" required></textarea>
            
            <label>Image URL:</label>
            <input type="text" name="image_url">
            
            <button type="submit">Save Hero</button>
        </form>
    </div>
    </div>
</body>
</html>