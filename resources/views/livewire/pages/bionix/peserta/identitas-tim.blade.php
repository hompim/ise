<div class="px-8 text-white">
    <div class="bg-{{ $alert_color }}-100 border-t-4 border-{{ $alert_color }}-500 rounded-b text-{{ $alert_color }}-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-{{ $alert_color }}-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg>
            </div>
            <div>
                <p class="font-bold">{{ $alert_header }}</p>
                <p class="text-sm">{!! $alert_content !!}</p>
                @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                    Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi' &&
                    !$alreadyDeadline)
                    <form wire:submit.prevent="applyVerification()">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Ajukan
                            Verifikasi
                            {{ Auth::user()->userable->bionix->profile_verif_status == 'Ditolak' ? 'Ulang' : '' }}
                        </button>
                    </form>
                @elseif(Auth::user()->userable->bionix->profile_verif_status == 'Tahap Verifikasi')
                    <button wire:click="batalSubmit()" type="button"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Batalkan Pengajuan
                    </button>
                @endif
            </div>
        </div>
    </div>


    <h3 class="text-xl font-weight-bold my-4 text-white">Informasi Tim</h3>
    <form wire:submit.prevent="saveData" enctype="multipart/form-data">
        <div class="card p-8 rounded-xl" style="background-color: #191a1e;border:0">
            <div class="grid sm:mb-10 sm:gap-x-20 sm:gap-y-8 gap-y-5 gap-x-5 md:grid-cols-10">
                <h4 class="text-gray-400 text-lg font-bold  col-span-5 md:col-span-2">Tim</h4>
                <div class="col-span-10 md:col-span-6 flex items-center">
                    <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                </div>
                <div class="col-span-10 md:col-span-2 md:block">
                    @if ($is_edit)
                        @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                            Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi')
                            <button class="text-blue-500 justify-self-end">Simpan
                            </button>
                        @endif
                    @else
                        @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                            Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi' &&
                            !$alreadyDeadline)
                            <button type="button" disabled class="text-blue-500 justify-self-end" wire:click="toEditMode()"><i
                                    class="fas fa-edit"></i>
                            </button>
                        @endif
                    @endif
                </div>
                <div class="col-span-10 md:col-span-2"></div>
                <div id="informasi_tim" class="col-span-10 md:col-span-6">
                    <div>
                        <label for="team_name" class="mb-2 font-bold text-gray-400">Nama Tim</label><br>
                        @if ($is_edit)
                            <input wire:model.defer="team_name" type="text" id="team_name" name="team_name"
                                class="registration-form input-text" style="color: black;margin-top:0;" required>
                        @else
                            <p class="font-bold text-lg">{{ $team_name }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="school_name" class="mb-2 font-bold text-gray-400 mt-4">Judul Ide Bisnis</label><br>
                        @if ($is_edit)
                            <input wire:model.defer="judul" type="text" id="judul" name="judul"
                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                style="color: black;margin-top:0;" required {{ $readonly ? 'disabled' : '' }}>
                        @else
                            <p class="font-bold text-lg">{{ $judul }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="school_name" class="mb-2 font-bold text-gray-400 mt-4">BMC</label><br>
                        <a href="{{asset('storage/'.$bmc)}}" target="_blank"> <p class="font-bold text-blue-400 text-lg">File BMC</p></a>

                    </div>
                    <div>
                        <label for="school_city" class="mb-2 font-bold text-gray-400 mt-4">Asal
                            Provinsi/Kota/Kabupaten {{ $is_junior ? 'Sekolah' : 'Perguruan Tinggi' }}</label><br>
                        <div class=" @if (!$is_edit) hidden @endif">
                            <div wire:ignore>
                                <select wire:model.defer="school_city"
                                    class="js-example-basic-single input-text bg-gray-100" name="school_city"
                                    style="width: 100%;" required>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <p class="font-bold text-lg @if ($is_edit) hidden @endif">
                            {{ Auth::user()->userable->bionix->city->name }}</p>

                    </div>
                </div>

                <div class="col-span-10 md:col-span-2"></div>

                @if ($is_junior)
                    <h4 class="text-lg font-bold text-gray-500 col-span-10 md:col-span-2">Anggota Tim 1</h4>
                    <div class="col-span-10 md:col-span-6 flex items-center">
                        <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                    </div>
                    <div class="col-span-10 md:col-span-2"></div>
                    <div class="col-span-10 md:col-span-2"></div>
                    <div id="anggota_1" class="col-span-10 md:col-span-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <div>
                                    <label for="member_1_name" class="mb-2 font-bold text-gray-400">Nama Lengkap Anggota
                                        1</label><br>
                                    @if ($is_edit)
                                        <input wire:model.defer="member_1_name" type="text" id="member_1_name"
                                            name="member_1_name"
                                            class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                            style="color: black;margin-top:0;" required
                                            {{ $readonly ? 'disabled' : '' }}>
                                    @else
                                        <p class="font-bold text-lg">{{ $member_1_name }}</p>
                                    @endif
                                </div>
                                <div>
                                    <label for="member_1_email" class="mb-2 font-bold text-gray-400 mt-4">Email Anggota
                                        1</label><br>
                                    @if ($is_edit)
                                        <input wire:model.defer="member_1_email" type="email" id="member_1_email"
                                            name="member_1_email" class="bg-gray-100 registration-form input-text"
                                            style="color:black;margin-top:0;" required disabled>
                                    @else
                                        <p class="font-bold text-lg">{{ $member_1_email }}</p>
                                    @endif
                                </div>
                                <div>
                                    <label for="member_1_whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor WA
                                        Anggota
                                        1</label><br>
                                    @if ($is_edit)
                                        <input wire:model.defer="member_1_whatsapp" type="text"
                                            id="member_1_whatsapp" name="member_1_whatsapp"
                                            class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                            style="color: black;margin-top:0;" required
                                            {{ $readonly ? 'disabled' : '' }}>
                                        <small class="text-red-400 font-normal" id="phone_1_error"
                                            style="display: none">Penulisan
                                            nomor
                                            handphone
                                            tidak sesuai dengan ketentuan.</small><br />
                                        <small class="text-gray-400 font-normal">*Nomor
                                            Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                                    @else
                                        <p class="font-bold text-lg">{{ $member_1_whatsapp }}</p>
                                    @endif
                                </div>
                                @if (!$is_junior)
                                    <div>
                                        <label for="member_1_twibbon" class="mb-2 font-bold text-gray-400 mt-4">Link
                                            Post
                                            Twibbon
                                            Anggota
                                            1</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_1_twibbon" type="text"
                                                id="member_1_twibbon" name="member_1_twibbon"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" required
                                                {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <a href="{{ $member_1_twibbon }}" target="_blank"
                                                class="font-bold text-md text-blue-500">{{ $member_1_twibbon }}</a>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_1_major" class="mb-2 font-bold text-gray-400 mt-4">Jurusan
                                            Anggota
                                            1</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_1_major" type="text"
                                                id="member_1_major" name="member_1_major"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" required
                                                {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <p class="font-bold text-lg">{{ $member_1_major }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_1_year" class="mb-2 font-bold text-gray-400 mt-4">Tahun
                                            Angkatan
                                            Anggota
                                            1</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_1_year" type="number" id="member_1_year"
                                                name="member_1_year"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" required
                                                {{ $readonly ? 'disabled' : '' }} min="2000"
                                                max="{{ date('Y') }}">
                                        @else
                                            <p class="font-bold text-lg">{{ $member_1_year }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_1_major" class="mb-2 font-bold text-gray-400 mt-4">Link
                                            Twibbon</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_1_twibbon" type="text"
                                                id="member_1_twibbon" name="member_1_twibbon"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" required
                                                {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <p class="font-bold text-lg">{{ $member_1_twibbon }}</p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                        <label for="kartu_pelajar"
                                            class="capitalize text-gray-400">{{ $jenisKartu . ' - Anggota 1' }}</label>
                                        <div x-show="isUploading" class="w-full">
                                            <progress max="100" x-bind:value="progress"
                                                class="w-full"></progress>
                                        </div>
                                        <img src="{{ $photo1 ? (is_string($photo1) ? asset('storage/' . $photo1) : $photo1->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                            class="object-fit mx-auto" alt="Kartu Pelajar" id="member_1_card_preview"
                                            style="max-height:50vh">
                                        @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                                            Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi' &&
                                            $is_edit)
                                            <button onclick="$('#member_1_card').click()" type="button"
                                                class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                                <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                            </button>
                                            <input type="file" wire:model.defer="photo1" class="form-control-file"
                                                name="member_1_card" id="member_1_card" accept=".jpg,.jpeg,.png"
                                                hidden>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                        <label for="kartu_pelajar" class="capitalize text-gray-400">Instagram Post
                                            Anggota 1</label>
                                        <div x-show="isUploading" class="w-full">
                                            <progress max="100" x-bind:value="progress"
                                                class="w-full"></progress>
                                        </div>
                                        <img src="{{ $member_1_instagram ? (is_string($member_1_instagram) ? asset('storage/' . $member_1_instagram) : $member_1_instagram->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                            class="object-fit mx-auto" alt="Kartu Pelajar"
                                            id="member_1_instagram_preview" style="max-height:50vh">
                                        @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                                            Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi' &&
                                            $is_edit)
                                            <button onclick="$('#member_1_instagram').click()" type="button"
                                                class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                                <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                            </button>
                                            <input type="file" wire:model.defer="member_1_instagram"
                                                class="form-control-file" name="member_1_instagram"
                                                id="member_1_instagram" accept=".jpg,.jpeg,.png" hidden>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-10 md:col-span-2"></div>
                    @if ($member_2_name || $is_edit)
                        <h4 class="text-lg font-bold text-gray-500 col-span-10 md:col-span-2">Anggota Tim 2 (Opsional)
                        </h4>
                        <div class="md:hidden col-span-5">
                            @if ($is_edit)
                                @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                                    Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi')
                                    <button class="justify-self-end block text-red-500" title="Hapus Anggota 2"
                                        type="button"
                                        wire:click="$emit('openModal','pages.bionix.peserta.confirmation-modal',{{ json_encode(['anggota_no' => 2]) }})">
                                        Hapus
                                    </button>
                                @endif
                            @endif
                        </div>
                        <div class="col-span-10 md:col-span-6 flex items-center">
                            <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                        </div>
                        <div class="col-span-10 md:col-span-2 md:block hidden items-center d-flex">
                            @if ($is_edit)
                                @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                                    Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi')
                                    <button class="justify-self-end block text-red-500" title="Hapus Anggota 2"
                                        type="button"
                                        wire:click="$emit('openModal','pages.bionix.peserta.confirmation-modal',{{ json_encode(['anggota_no' => 2]) }})">
                                        Hapus
                                    </button>
                                @endif
                            @endif
                        </div>
                        <div class="col-span-10 md:col-span-2"></div>

                        <div id="anggota_2" class="col-span-10 md:col-span-6">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <div>
                                        <label for="member_2_name" class="mb-2 font-bold text-gray-400">Nama Lengkap
                                            Anggota
                                            2</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_2_name" type="text" id="member_2_name"
                                                name="member_2_name"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <p class="font-bold text-lg">{{ $member_2_name }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_2_email" class="mb-2 font-bold text-gray-400 mt-4">Email
                                            Anggota
                                            2</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_2_email" type="email"
                                                id="member_2_email" name="member_2_email"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <p class="font-bold text-lg">{{ $member_2_email }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_2_whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor
                                            WA
                                            Anggota
                                            2</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_2_whatsapp" type="text"
                                                id="member_2_whatsapp" name="member_2_whatsapp"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}>
                                            <small class="text-red-400 font-normal" id="phone_2_error"
                                                style="display: none">Penulisan
                                                nomor
                                                handphone
                                                tidak sesuai dengan ketentuan.</small><br />
                                            <small class="text-gray-400 font-normal">*Nomor
                                                Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                                        @else
                                            <p class="font-bold text-lg">{{ $member_2_whatsapp }}</p>
                                        @endif
                                    </div>
                                    @if (!$is_junior)
                                        <div>
                                            <label for="member_2_twibbon"
                                                class="mb-2 font-bold text-gray-400 mt-4">Link
                                                Post
                                                Twibbon
                                                Anggota
                                                2</label><br>
                                            @if ($is_edit)
                                                <input wire:model.defer="member_2_twibbon" type="text"
                                                    id="member_2_twibbon" name="member_2_twibbon"
                                                    class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                    style="color: black;margin-top:0;"
                                                    {{ $readonly ? 'disabled' : '' }}>
                                            @else
                                                <a href="{{ $member_2_twibbon }}" target="_blank"
                                                    class="font-bold text-md text-blue-500">{{ $member_2_twibbon }}</a>
                                            @endif
                                        </div>
                                        <div>
                                            <label for="member_2_major"
                                                class="mb-2 font-bold text-gray-400 mt-4">Jurusan
                                                Anggota
                                                2</label><br>
                                            @if ($is_edit)
                                                <input wire:model.defer="member_2_major" type="text"
                                                    id="member_2_major" name="member_2_major"
                                                    class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                    style="color: black;margin-top:0;"
                                                    {{ $readonly ? 'disabled' : '' }}>
                                            @else
                                                <p class="font-bold text-lg">{{ $member_2_major }}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <label for="member_2_year" class="mb-2 font-bold text-gray-400 mt-4">Tahun
                                                Angkatan
                                                Anggota
                                                2</label><br>
                                            @if ($is_edit)
                                                <input wire:model.defer="member_2_year" type="number"
                                                    id="member_2_year" name="member_2_year"
                                                    class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                    style="color: black;margin-top:0;"
                                                    {{ $readonly ? 'disabled' : '' }} min="2000"
                                                    max="{{ date('Y') }}">
                                            @else
                                                <p class="font-bold text-lg">{{ $member_2_year }}</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                        <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                            <label for="kartu_pelajar"
                                                class="capitalize text-gray-400">{{ $jenisKartu . ' - Anggota 2' }}</label>
                                            <div x-show="isUploading" class="w-full">
                                                <progress max="100" x-bind:value="progress"
                                                    class="w-full"></progress>
                                            </div>
                                            <img src="{{ $photo2 ? (is_string($photo2) ? asset('storage/' . $photo2) : $photo2->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                                class="object-fit mx-auto" alt="Kartu Pelajar"
                                                id="member_2_card_preview" style="max-height:50vh">
                                            @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                                                Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi' &&
                                                $is_edit)
                                                <button onclick="$('#member_2_card').click()" type="button"
                                                    class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                                    <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                                </button>
                                                <input type="file" wire:model.defer="photo2"
                                                    class="form-control-file" name="member_2_card" id="member_2_card"
                                                    accept=".jpg,.jpeg,.png" hidden>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                        <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                            <label for="kartu_pelajar" class="capitalize text-gray-400">Instagram Post
                                                Anggota 2</label>
                                            <div x-show="isUploading" class="w-full">
                                                <progress max="100" x-bind:value="progress"
                                                    class="w-full"></progress>
                                            </div>
                                            <img src="{{ $member_2_instagram ? (is_string($member_2_instagram) ? asset('storage/' . $member_2_instagram) : $member_2_instagram->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                                class="object-fit mx-auto" alt="Kartu Pelajar"
                                                id="member_2_instagram_preview" style="max-height:50vh">
                                            @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                                                Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi' &&
                                                $is_edit)
                                                <button onclick="$('#member_2_instagram').click()" type="button"
                                                    class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                                    <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                                </button>
                                                <input type="file" wire:model.defer="member_2_instagram"
                                                    class="form-control-file" name="member_2_instagram"
                                                    id="member_2_instagram" accept=".jpg,.jpeg,.png" hidden>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!$is_junior)
                    @for ($x = 1; $x <= $senior_member; $x++)
                        <h4 class="text-lg font-bold text-gray-500 col-span-10 md:col-span-2 text-left">Anggota Tim {{$x}}</h4>
                        <div class="col-span-10 md:col-span-6 flex items-center">
                            <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                        </div>
                        <div class="col-span-10 md:col-span-2"></div>
                        <div class="col-span-10 md:col-span-2"></div>
                        <div id="anggota_{{$x}}" class="col-span-10 md:col-span-6">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <div>
                                        <label for="member_{{$x}}_name" class="mb-2 font-bold text-gray-400">Nama Lengkap
                                            Anggota
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_name" type="text" id="member_{{$x}}_name"
                                                name="member_{{$x}}_name" class="registration-form input-text"
                                                style="color: black;margin-top:0;">
                                        @else
                                            <p class="font-bold text-lg">{{ ${'member_'.$x.'_name'} }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_3_email" class="mb-2 font-bold text-gray-400 mt-4">Email
                                            Anggota
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_email" type="email"
                                                id="member_{{$x}}_email" name="member_{{$x}}_email"
                                                class="registration-form input-text"
                                                style="color: black;margin-top:0;">
                                        @else
                                            <p class="font-bold text-lg">{{ ${'member_'.$x.'_email'} }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_3_whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor
                                            WA
                                            Anggota
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_whatsapp" type="text"
                                                id="member_{{$x}}_whatsapp" name="member_{{$x}}_whatsapp"
                                                class="registration-form input-text"
                                                style="color: black;margin-top:0;">
                                            <small class="text-red-400 font-normal" id="phone_3_error"
                                                style="display: none">Penulisan
                                                nomor
                                                handphone
                                                tidak sesuai dengan ketentuan.</small><br />
                                            <small class="text-gray-400 font-normal">*Nomor
                                                Handphone diawali 08 dan terdiri dari 10-13 karakter.</small>
                                        @else
                                            <p class="font-bold text-lg">{{ ${'member_'.$x.'_whatsapp'} }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_3_twibbon" class="mb-2 font-bold text-gray-400 mt-4">Link
                                            Post
                                            Twibbon
                                            Anggota
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_twibbon" type="text"
                                                id="member_{{$x}}_twibbon" name="member_{{$x}}_twibbon"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <a href="{{ ${'member_'.$x.'_twibbon'} }}" target="_blank"
                                                class="font-bold text-md text-blue-500">{{ ${'member_'.$x.'_twibbon'} }}</a>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_3_twibbon" class="mb-2 font-bold text-gray-400 mt-4">Link
                                            Akun Instagram
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_instagram" type="text"
                                                id="member_{{$x}}_instagram" name="member_{{$x}}_instagram"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <a href="{{ ${'member_'.$x.'_instagram'} }}" target="_blank"
                                                class="font-bold text-md text-blue-500">{{ ${'member_'.$x.'_instagram'} }}</a>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_3_major" class="mb-2 font-bold text-gray-400 mt-4">Universitas Anggota
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_major" type="text"
                                                id="member_{{$x}}_university" name="member_3_university"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <p class="font-bold text-lg">{{ ${'member_'.$x.'_university'} }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_3_major" class="mb-2 font-bold text-gray-400 mt-4">Jurusan
                                            Anggota
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_major" type="text"
                                                id="member_{{$x}}_major" name="member_3_major"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}>
                                        @else
                                            <p class="font-bold text-lg">{{ ${'member_'.$x.'_major'} }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="member_3_year" class="mb-2 font-bold text-gray-400 mt-4">Tahun
                                            Angkatan
                                            Anggota
                                            {{$x}}</label><br>
                                        @if ($is_edit)
                                            <input wire:model.defer="member_{{$x}}_year" type="number" id="member_{{$x}}_year"
                                                name="member_{{$x}}_year"
                                                class="{{ $readonly ? 'bg-gray-100' : '' }} registration-form input-text"
                                                style="color: black;margin-top:0;" {{ $readonly ? 'disabled' : '' }}
                                                min="2000" max="{{ date('Y') }}">
                                        @else
                                            <p class="font-bold text-lg">{{ ${'member_'.$x.'_year'} }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                        <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                            <label for="kartu_pelajar"
                                                class="capitalize text-gray-400">{{ $jenisKartu . ' - Anggota'.$x }}</label>
                                            <div x-show="isUploading" class="w-full">
                                                <progress max="100" x-bind:value="progress"
                                                    class="w-full"></progress>
                                            </div>
                                            <img src="{{ ${'photo'.$x} ? (is_string(${'photo'.$x}) ? asset('storage/' . ${'photo'.$x}) : ${'photo'.$x}->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                                class="object-fit mx-auto" alt="Kartu Pelajar"
                                                id="member_{{$x}}_card_preview" style="max-height:50vh">
                                            @if (Auth::user()->userable->bionix->profile_verif_status != 'Terverifikasi' &&
                                                Auth::user()->userable->bionix->profile_verif_status != 'Tahap Verifikasi' &&
                                                $is_edit)
                                                <button type="button" onclick="$('#member_{{$x}}_card').click()"
                                                    class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                                    <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                                </button>
                                                <input type="file" wire:model.defer="photo{{$x}}"
                                                    class="form-control-file" name="member_{{$x}}_card" id="member_{{$x}}_card"
                                                    accept=".jpg,.jpeg,.png" hidden>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-10 md:col-span-2"></div>
                    @endfor
                @endif
            </div>
        </div>
    </form>
    @if ($errors->any())
        <div class="fixed bottom-12 right-12 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Terjadi masalah</p>
                    <p class="text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
    @if ($message)
        <div class="fixed bottom-12 right-12 bg-{{ $messageType }}-100 border-t-4 border-{{ $messageType }}-500 rounded-b text-{{ $messageType }}-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-{{ $messageType }}-500 mr-4"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">{{ $messageType == 'green' ? 'Sukses' : 'Terjadi Masalah' }}</p>
                    <p class="text-sm">{{ $message }}</p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><p>Tutup</p></i></button>
            </div>
        </div>
    @endif
</div>
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
            position: absolute;
            top: 1px;
            right: 1px;
            width: 20px;
            bottom: 1px;
        }

        .select2 {
            border: 0.75px solid #6b7280;
        }

        .select2-container--default .select2-selection--single {
            border: 0;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #000;
            line-height: 28px;
            font-weight: normal;
            padding-left: 0px;
        }
    </style>
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                width: 'resolve'
            })

            $('.select2').addClass('registration-form input-text')

            $('.js-example-basic-single').on('change', function(e) {
                @this.set('school_city', e.target.value)
            });

            var $regexname = /^(^08)\d{8,11}$/;
            $('#member_1_whatsapp').on('keypress keydown keyup', function() {
                if (!$(this).val().match($regexname)) {
                    // there is a mismatch, hence show the error message
                    $('#phone_1_error').removeClass('hidden');
                    $('#phone_1_error').show();
                } else {
                    // else, do not display message
                    $('#phone_1_error').addClass('hidden');
                }
            });
            $('#member_2_whatsapp').on('keypress keydown keyup', function() {
                if (!$(this).val().match($regexname)) {
                    // there is a mismatch, hence show the error message
                    $('#phone_2_error').removeClass('hidden');
                    $('#phone_2_error').show();
                } else {
                    // else, do not display message
                    $('#phone_2_error').addClass('hidden');
                }
            });
            @if (!$is_junior)
                $('#member_3_whatsapp').on('keypress keydown keyup', function() {
                    if (!$(this).val().match($regexname)) {
                        // there is a mismatch, hence show the error message
                        $('#phone_3_error').removeClass('hidden');
                        $('#phone_3_error').show();
                    } else {
                        // else, do not display message
                        $('#phone_3_error').addClass('hidden');
                    }
                });
            @endif
        });
    </script>
@endpush

@livewire('livewire-ui-modal')
