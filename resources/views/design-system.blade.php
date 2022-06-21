<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>ISE! 2022</title>
</head>

<body>
    <h1 class="my-4 text-3xl font-bold text-center font-poppins">ISE! 2022 Design System</h1>
    <div class="p-4">
        {{-- gradient colors --}}
        <h2 class="my-4 text-3xl font-bold font-poppins">Gradient</h2>
        <div class="flex flex-row w-full px-4 space-x-2">
            <div class="w-24 h-6 rounded bg-gradient-to-r from-pink-300 to-purple-300"></div>
            <div class="w-24 h-6 rounded bg-gradient-to-br from-pink-300 to-purple-300"></div>
            <div class="w-24 h-6 rounded bg-gradient-to-b from-pink-300 to-purple-300"></div>
            <div class="w-24 h-6 rounded bg-gradient-to-r from-pink-75 to-pink-300"></div>
            <div class="w-24 h-6 rounded bg-gradient-to-r from-purple-75 to-purple-300"></div>
        </div>
        {{-- pink colors --}}
        <h2 class="my-4 text-3xl font-bold font-poppins">Pink</h2>
        <div class="flex flex-row w-full px-4 space-x-2">
            <div class="w-24 h-6 rounded bg-pink-50"></div>
            <div class="w-24 h-6 rounded bg-pink-75"></div>
            <div class="w-24 h-6 bg-pink-100 rounded"></div>
            <div class="w-24 h-6 bg-pink-200 rounded"></div>
            <div class="w-24 h-6 font-bold text-center text-white bg-pink-300 rounded font-poppins">Main</div>
            <div class="w-24 h-6 bg-pink-400 rounded"></div>
            <div class="w-24 h-6 bg-pink-500 rounded"></div>
        </div>
        {{-- purple colors --}}
        <h2 class="my-4 text-3xl font-bold font-poppins">Purple</h2>
        <div class="flex flex-row w-full px-4 space-x-2">
            <div class="w-24 h-6 rounded bg-purple-50"></div>
            <div class="w-24 h-6 rounded bg-purple-75"></div>
            <div class="w-24 h-6 bg-purple-100 rounded"></div>
            <div class="w-24 h-6 bg-purple-200 rounded"></div>
            <div class="w-24 h-6 font-bold text-center text-white bg-purple-300 rounded font-poppins">Main</div>
            <div class="w-24 h-6 bg-purple-400 rounded"></div>
            <div class="w-24 h-6 bg-purple-500 rounded"></div>
        </div>
        {{-- text colors --}}
        <h2 class="my-4 text-3xl font-bold font-poppins">Text</h2>
        <div class="flex flex-row w-full px-4 space-x-2">
            <div class="w-24 h-6 bg-white border rounded"></div>
            <div class="w-24 h-6 bg-gray-400 border rounded"></div>
            <div class="w-24 h-6 bg-black border rounded"></div>
        </div>
        <h2 class="my-4 text-3xl font-bold font-poppins">Background</h2>
        <div class="flex flex-row w-full px-4 space-x-2">
            <div class="w-24 h-6 bg-black border rounded"></div>
        </div>

    </div>
</body>

</html>
