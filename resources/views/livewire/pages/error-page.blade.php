<script src="https://cdn.tailwindcss.com"></script>
<div class="flex flex-col-reverse lg:flex-row items-center bg-black h-screen md:px-72 mx:0">
    <div class="flex flex-1 flex-col items-center lg:items-start text-white font-poppins">
        <h1 class="text-8xl text-center lg:text-left">Oops!</h1>
        <p class="text-4xl text-center lg:text-left mt-4">The page you're looking for is still under construction</p>
        <button class="px-3 py-2 bg-gradient-to-r from-purple-500 to-purple-900 rounded-full xl:mt-4 mt-6 relative blur">Go Back Home</button>
        <button class="px-3 py-2 bg-gradient-to-r from-purple-500 to-purple-900 rounded-full xl:mt-52 xl:flex mt-64 absolute">Go Back Home</button>
    </div>
    <div class="flex justify-center flex-1">
        <img src="{{ asset('images/error.svg') }}" class="w-full h:full" alt="error-image" >
    </div>

</div>
