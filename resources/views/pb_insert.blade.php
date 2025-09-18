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
        <!-- Benefit Form -->
 <div class="form-container">
    <div class="form-box">
      <h1>Benefit Part</h1>
        <form action="{{ route('benefit.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="image_url">Image URL:</label>
            <input type="text" id="image_url" name="image_url">

            <button type="submit">Save Benefit</button>
        </form>
    </div>
 </div>
    
</body>
</html>