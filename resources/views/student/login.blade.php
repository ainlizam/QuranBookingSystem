<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('/images/quranbackground.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-brown-700">Student Login</h1>
        <form action="{{ route('student.login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="w-full bg-brown-600 text-white p-2 rounded hover:bg-brown-700">Login</button>
        </form>
    </div>
</body>
</html>
