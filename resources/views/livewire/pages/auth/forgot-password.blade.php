<div>
    {{-- The best athlete wants his opponent at his best. --}}

    {{-- For testing dashboard, Hapus/Komen aja kalo pengen implemen desain login --}}
    {{-- <form action="{{route('login')}}" method="POST">
        @csrf
        email
        <input type="email">
        Password
        <input type="password">
        <input type="submit" value="Submit">
    </form> --}}
    <form class="mt-8 space-y-6 mx-10 mb-12 text-lg" action="/forgot-password" method="POST">
        <h2 class="text-4xl text-white font-poppins font-bold">Forgot Password</h2>
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        @endif
        @if(session('status'))
        <div
            class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative"
            role="alert">
            {{session('status')}}
        </div>
    @endif
        <div class="rounded-md shadow-sm -space-y-px">

            <div class="mb-2 space-y-2 flex flex-col text-white font-poppins font-medium">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" required
                    class="p-2 rounded-md bg-transparent focus:border-pink-200 focus:ring-pink-200  autofill:bg-transparent"
                    placeholder="Enter your email">
            </div>
            {{-- <input id="password" name="password" type="password" required class="p-2 rounded-md bg-transparent"
                placeholder="Enter your password"> --}}
        </div>
        <button type="submit"
            class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 text-white rounded-full bg-gradient-to-r from-pink-300 to-purple-300 font-poppins font-semibold opacity-75 hover:opacity-100 transition duration-300">
            Submit
        </button>
    </form>

</div>
