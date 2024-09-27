<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-900">
    <form action="{{ route('donate') }}" method="POST" class="bg-gray-800 p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-semibold text-white mb-6 text-center">MAKE DONATION </h1>
        @csrf
        <div class="mb-6">
            <label for="name" class="block text-base font-medium text-gray-300 mb-2">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 ease-in-out">
        </div>

        <div class="mb-6">
            <label for="amount" class="block text-base font-medium text-gray-300 mb-2">Amount:</label>
            <input type="number" id="amount" name="amount" class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 ease-in-out">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md font-medium text-sm hover:bg-blue-600 transition-colors duration-300 ease-in-out">Donate</button>
    </form>
</body>
</html>
