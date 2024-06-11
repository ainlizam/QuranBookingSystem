<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            background-image: url('{{ asset('images/quranbackground.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
        </header>

        <main class="flex-grow py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 mb-6">
                        Welcome, {{ Auth::user()->name }}
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h4 class="text-lg font-medium leading-6 text-gray-900 mb-4">Student Information</h4>
                            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <p><strong>Gender:</strong> {{ Auth::user()->gender }}</p>
                            <p><strong>Age:</strong> {{ Auth::user()->age }}</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h4 class="text-lg font-medium leading-6 text-gray-900 mb-4">Additional Information</h4>
                            <p>You can add more information here...</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <form action="{{ route('student.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-red-600 text-white p-2 rounded hover:bg-red-700">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white shadow mt-6">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-500">
                &copy; 2023 Quran Booking System. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>
