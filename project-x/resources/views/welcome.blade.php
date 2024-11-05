<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-purple-100 to-blue-100">
    <form action="{{ route('donate') }}" method="POST" class="bg-white p-10 rounded-xl shadow-lg w-full max-w-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Support Our Cause</h1>
        @csrf
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-600 mb-2">Your Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400 transition duration-200" placeholder="Full Name">
        </div>

        <div class="mb-6">
            <label for="amount" class="block text-sm font-medium text-gray-600 mb-2">Donation Amount</label>
            <input type="number" id="amount" name="amount" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400 transition duration-200" placeholder="Amount in Birr">
        </div>

        <button type="submit" class="w-full bg-purple-500 text-white py-3 rounded-lg font-semibold shadow-lg hover:bg-purple-600 transition duration-300">Donate Now</button>
    </form>
</body>
</html>
