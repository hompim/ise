<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pendaftaran Student
            Level
        </h1>
    </div>
    <div class="flex flex-row space-x-4 justify-evenly">
        <div class="flex space-x-4 items-center my-8">
            <div
                class="bg-gradient-to-r from-pink-300 to-purple-300 rounded-full h-12 w-12 flex justify-center items-center">
                <p class="text-white text-center font-poppins font-semibold text-xl">1</p>
            </div>
            <h2 class="font-semibold text-white font-poppins text-lg">Informasi Tim</h2>
        </div>
        <div class="flex space-x-4 items-center my-8">
            <div class="bg-white ring-4 ring-purple-200 rounded-full h-10 w-10 flex justify-center items-center">
                <p class="text-purple-200 text-center font-poppins font-semibold text-xl">2</p>
            </div>
            <h2 class="font-semibold text-white font-poppins text-lg">Anggota Tim</h2>
        </div>
        <div class="flex space-x-4 items-center my-8">
            <div class="bg-white ring-4 ring-purple-200 rounded-full h-10 w-10 flex justify-center items-center">
                <p class="text-purple-200 text-center font-poppins font-semibold text-xl">3</p>
            </div>
            <h2 class="font-semibold text-white font-poppins text-lg">Akun</h2>
        </div>
    </div>
    <div class="flex justify-center">
        <form action="#" class="flex flex-col justify-center w-full mx-20 mb-8 space-y-8 ">
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Tim</label>
                <input id="name" name="name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama tim kamu">
            </div>
            <div class="flex flex-col space-y-2 font-medium font-poppins">
                <label for="asal-sekolah" class="text-white">Asal Sekolahmu</label>
                <select id="asal-sekolah" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                    <option class="bg-liteBlack" disabled selected value="">Pilih
                        asal
                        sekolah
                        kamu</option>
                    <option value="1" class="bg-liteBlack ">sma 1</option>
                </select>
            </div>
            <div class="flex flex-col space-y-2 font-medium font-poppins">
                <label for="asal-domisili" class="text-white">Asal provinsi/kota/kabupaten
                    sekolahmu</label>
                <select id="asal-domisili" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                    <option class="bg-liteBlack" disabled selected value="">Pilih asal
                        provinsi/kota/kabupaten
                        sekolah
                        kamu</option>
                    <option value="1" class="bg-liteBlack ">sma 1</option>

                </select>
            </div>
            <div class="flex-flex-col">
                <h3 class="text-xl font-semibold text-white font-poppins">Region</h3>
                <h4 class="text-lg font-semibold text-[#6B7280] font-poppins">Kamu berada di <span
                        class="text-pink-300">Region
                        1</span></h4>
            </div>
            <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group">
                <div class="absolute inset-0 ">
                    <button type="button"
                        class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins transform hover:scale-105 px-24">Next</button>
                </div>
                <button type="button"
                    class="relative btn transform hover:scale-105 duration-300 px-24 text-xl">Next</button>
            </div>
    </div>
    </form>
</div>
