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
    

    <!-- Solution Form -->
 <div class="form-container">
    <div class="form-box">
      <h1>Solution Part</h1>
        <form action="{{ route('solution.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Save Solution</button>
        </form>
    </div>

</div>

</body>
</html>