<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Pembayaran DP</h5>
    </div>
    <hr />
    <form wire:submit.prevent="submitSchool" class="mt-4">
        <p>Sebelum melanjutkan ke pembayaran DP, isikan terlebih dahulu sekolah kamu</p>
        <div class="flex flex-col space-y-2 font-medium mt-2 font-poppins">
            <p for="name">Sekolah Roadshow</p>
            <select id="school" name="school_bionix" required
                class="p-2 rounded-md !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200 "
                placeholder="Masukkan asal sekolah kamu" wire:model.defer="school_bionix">
                <option value="">Pilih Sekolahmu</option>
                @foreach ($schools as $school)
                  <option value="{{$school->id}}">{{$school->school_name}}</option>
                @endforeach
            </select>
        </div>
        <p class="mt-4 font-semibold">Bila Sekolah kamu tidak ada di list, maka tunggu Tim RoadShow ISE! 2022 untuk mendatangi sekolahmu untuk memberikan informasi yang menarik seputar ISE!</p>
        <hr class="my-4" />
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>
