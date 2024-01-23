<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500">
        
        <nav class="bg-gray-800 p-4">
            <ul class="flex space-x-4 text-white">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ route('add.student') }}" class="hover:underline">Add Student</a></li>
                <a class="nav-link" href="{{ route('display.index') }}">Show Students</a>
            </ul>
        </nav>


  <div class="container mx-auto mt-4">
        <!-- Your navigation or header content here -->

        @yield('content')

        <!-- Your footer or other common elements here -->
    </div>
  
</body>
</html>