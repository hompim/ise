<div class="mx-8 text-white">
    {{-- Header Card --}}
    <h1 class="text-3xl font-weight-bold text-white">Halo, Selamat Datang di Dashboard IS Class!</h1>
    <div class="grid md:grid-cols-2 gap-4">
        <div>
            <h3 class="text-xl font-weight-bold mt-8 text-white">Info</h3>
            <div class="grid md:grid-cols-2 gap-4">
                {{-- Nama Tim --}}
                <div class="card shadow-md rounded-xl" style="background-color: #191a1e; border:0">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-user text-3xl text-purple-100"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Nama</div>
                            <div class="text-value-lg text-gray-300">{{ Auth::user()->name }}</div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-md rounded-xl" style="background-color: #191a1e; border:0">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fa-solid fa-graduation-cap text-3xl text-purple-100"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Kelas Is Class</div>
                            <div class="text-value-lg text-gray-300">{{ Auth::user()->userable->isclass->status }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 class="md:mt-8 text-xl font-weight-bold text-white">Status</h3>
            <div class="grid md:grid-cols-1 gap-4">
                {{-- Status Kartu Pelajar --}}
                <div class="card shadow-md rounded-xl" style="background-color: #191a1e; border:0">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-clipboard-list text-3xl text-purple-100"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Verifikasi Kartu Pelajar</div>
                            <div class="text-value-lg text-gray-300">
                                {{ Auth::user()->userable->isclass->profile_verif_status }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="{{ $notif ? null : 'hidden' }} bg-{{ $alert_color }}-100 border-t-4 border-{{ $alert_color }}-500 rounded-b text-{{ $alert_color }}-900 px-4 py-3 shadow-md"
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
                @if (Auth::user()->userable->isclass->profile_verif_status != 'Terverifikasi' &&
                    Auth::user()->userable->isclass->profile_verif_status != 'Tahap Verifikasi' &&
                    !$alreadyDeadline)
                    <form wire:submit.prevent="applyVerification()">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Ajukan
                            Verifikasi
                            {{ Auth::user()->userable->isclass->profile_verif_status == 'Ditolak' ? 'Ulang' : '' }}
                        </button>
                    </form>
                @endif
            </div>
            <div class="flex-1 flex justify-end">
                <button type="button" title="Hapus" wire:click="closeNotif()" class="self-start"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
        <form wire:submit.prevent="saveData" enctype="multipart/form-data">
            <div class="card p-8 rounded-xl mb-4" style="background-color: #191a1e; border:0">
                <h3 class="text-xl font-weight-bold">Informasi Peserta</h3>
                <div class="grid sm:mb-10 sm:gap-x-20 sm:gap-y-5 gap-y-5 gap-x-5 md:grid-cols-10">
                    <div class="col-span-5">
                        @if ($is_edit)
                            @if (Auth::user()->userable->isclass->profile_verif_status != 'Terverifikasi' &&
                                Auth::user()->userable->isclass->profile_verif_status != 'Tahap Verifikasi')
                                <button class="justify-self-end block text-blue-500">Simpan
                                </button>
                            @endif
                        @else
                            @if (Auth::user()->userable->isclass->profile_verif_status != 'Terverifikasi' &&
                                Auth::user()->userable->isclass->profile_verif_status != 'Tahap Verifikasi')
                                <button type="button" class="justify-self-end block text-blue-500"
                                    wire:click="toEditMode()"><i class="fas fa-edit"></i> Edit
                                </button>
                            @endif
                        @endif
                    </div>
                    <div class="col-span-10 md:col-span-6 flex items-center">
                        <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
                    </div>

                    <div class="col-span-10 md:col-span-2"></div>
                    <div class="col-span-10 md:col-span-6">
                        <div class="grid md:grid-cols-2 gap-4 grid-cols-1">
                            <div>
                                <div>
                                    <label for="team_name" class="mb-2 font-bold text-gray-400">Nama Peserta</label><br>
                                    @if ($is_edit)
                                        <input wire:model.defer="name" type="text" id="name" name="name"
                                            class="{{ $readonly ? 'bg-gray-100' : '' }} form-control input-text"
                                            style="color: black;margin-top:0;" required
                                            {{ $readonly ? 'disabled' : '' }}>
                                    @else
                                        <p class="font-bold text-lg">{{ $name }}</p>
                                    @endif
                                </div>
                                <div>
                                    <label for="Email" class="mb-2 font-bold text-gray-400 mt-4">Email
                                        Peserta</label><br>
                                    @if ($is_edit)
                                        <input wire:model.defer="email" disabled type="text" id="email"
                                            name="email" class="bg-gray-100 form-control input-text"
                                            style="color: black;margin-top:0;" required disabled>
                                    @else
                                        <p class="font-bold text-lg">{{ $email }}</p>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="whatsapp" class="mb-2 font-bold text-gray-400 mt-4">Nomor WA
                                    </label><br>
                                    @if ($is_edit)
                                        <input wire:model.defer="whatsapp" type="text" id="whatsapp" name="whatsapp"
                                            class="{{ $readonly ? 'bg-gray-100' : '' }} form-control input-text"
                                            style="color: black;margin-top:0;" required
                                            {{ $readonly ? 'disabled' : '' }}>
                                    @else
                                        <p class="font-bold text-lg">{{ $whatsapp }}</p>
                                    @endif
                                </div>
                                <div>
                                    <label for="class" class="mb-2 font-bold text-gray-400 mt-4">Kelas</label><br>
                                    <div class=" @if (!$is_edit) hidden @endif">
                                        <div wire:ignore>
                                            <select wire:model.defer="class"
                                                class="js-example-basic-single input-text text-black bg-gray-100" name="class"
                                                style="width: 100%;color:black" required>

                                                <option value="offline">Offline</option>
                                                <option value="online">Online</option>

                                            </select>
                                        </div>
                                    </div>

                                    <p class="font-bold text-lg @if ($is_edit) hidden @endif">
                                        {{ $class }}</p>

                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="" x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                        <label for="kartu_pelajar" class="capitalize text-gray-400">Kartu
                                            Identitas</label>
                                        <div x-show="isUploading" class="w-full">
                                            <progress max="100" x-bind:value="progress"
                                                class="w-full"></progress>
                                        </div>
                                        <img src="{{ $photo1 ? (is_string($photo1) ? asset('storage/' . $photo1) : $photo1->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                            class="object-fit mx-auto" alt="Kartu Pelajar" id="member_1_card_preview"
                                            style="max-height:50vh">
                                        @if (Auth::user()->userable->isclass->profile_verif_status != 'Terverifikasi' &&
                                            Auth::user()->userable->isclass->profile_verif_status != 'Tahap Verifikasi' &&
                                            $is_edit)
                                            <button type="button" onclick="$('#member_1_card').click()"
                                                class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-3">
                                                <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                            </button>
                                            <input type="file" wire:model.defer="photo1" class="form-control-file"
                                                name="photo1" id="member_1_card" accept=".jpg,.jpeg,.png" hidden>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="" x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                        <label for="kartu_pelajar" class="capitalize text-gray-400">twibbon</label>
                                        <div x-show="isUploading" class="w-full">
                                            <progress max="100" x-bind:value="progress"
                                                class="w-full"></progress>
                                        </div>
                                        <img src="{{ $twibbon ? (is_string($twibbon) ? asset('storage/' . $twibbon) : $twibbon->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                            class="object-fit mx-auto" alt="Kartu Pelajar" id="member_1_card_preview"
                                            style="max-height:50vh">
                                        @if (Auth::user()->userable->isclass->profile_verif_status != 'Terverifikasi' &&
                                            Auth::user()->userable->isclass->profile_verif_status != 'Tahap Verifikasi' &&
                                            $is_edit)
                                            <button type="button" onclick="$('#member_1_twibbon').click()"
                                                class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-3">
                                                <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                            </button>
                                            <input type="file" wire:model.defer="twibbon"
                                                class="form-control-file" name="twibbon" id="member_1_twibbon"
                                                accept=".jpg,.jpeg,.png" hidden>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mt-3">
                                <div class="" x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="flex flex-col items-center justify-center md:p-3 w-full">
                                        <label for="kartu_pelajar" class="capitalize text-gray-400">Bukti Follow</label>
                                        <div x-show="isUploading" class="w-full">
                                            <progress max="100" x-bind:value="progress"
                                                class="w-full"></progress>
                                        </div>
                                        <img src="{{ $instagram ? (is_string($instagram) ? asset('storage/' . $instagram) $instagram->temporaryUrl()) : asset('/img/global/placeholder-image.png') }}"
                                            class="object-fit mx-auto" alt="Kartu Pelajar" id="member_1_card_preview"
                                            style="max-height:50vh">
                                        @if (Auth::user()->userable->isclass->profile_verif_status != 'Terverifikasi' && Auth::user()->userable->isclass->profile_verif_status != 'Tahap Verifikasi' && $is_edit)
                                            <button type="button" onclick="$('#member_1_card').click()"
                                                class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-3">
                                                <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File
                                            </button>
                                            <input type="file" wire:model.defer="instagram" class="form-control-file"
                                                name="instagram" id="member_1_instagram" accept=".jpg,.jpeg,.png"
                                                hidden>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="card rounded-xl px-8 py-3" style="background-color: #191a1e; border:0">
            <h3 class="text-xl mt-3 font-weight-bold text-white">Pengumuman</h3>
            <div class="col-span-10 md:col-span-6 flex items-center mb-3">
                <div class="border-2 border-bottom-0 flex-grow" style="height: 1px;"></div>
            </div>
            <div class="card shadow-md rounded-xl bg-gray-900" style="border:0">
                <div class="card-body">
                    <h6 class="font-bold">
                    </h6>
                    <h4 class="font-bold text-xl" style="color: #FF7C74;">Grub Whatsapp</h4>
                    <p class="text-sm font-weight-normal mt-4">Bagi peserta yang telah mendaftar silahkan masuk ke grub
                        berikut untuk mendapatkan informasi terbaru: <a
                            href="https://chat.whatsapp.com/I8U5hnsizwl46s6ulildvm">https://chat.whatsapp.com/I8U5hnsizwl46s6ulildvm</a>
                    </p>
                </div>
            </div>
            @forelse($announcement as $a)
                <div class="card shadow-md rounded-xl bg-gray-900" style="border:0">
                    <div class="card-body">
                        <h6 class="font-bold {{ $a->type == 'Normal' ? 'text-black' : 'text-red-500' }}">
                            {{ $a->type }}</h6>
                        <h4 class="font-bold text-xl" style="color: #FF7C74;">{{ $a->title }}</h4>
                        <div class="flex flex-row align-items-center"><i class="far fa-calendar-alt"></i>
                            <p class="mb-0 ml-2 text-white font-medium">{{ date('d F Y', strtotime($a->start)) }}
                            </p>
                        </div>
                        <p class="text-sm font-weight-normal mt-4">{!! $a->content !!}</p>
                    </div>
                </div>
            @empty
                <p class="text-white">Tidak ada pengumuman</p>
            @endforelse
        </div>
    </div>

    @if ($errors->any() || $errorMessage)
        <div class="fixed px-4 py-3 text-red-900 bg-red-100 border-t-4 border-red-500 rounded-b shadow-md bottom-12 right-12"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="w-6 h-6 mr-4 text-red-500 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Terjadi masalah</p>
                    <ul class="font-normal">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @if ($errorMessage)
                        <p class="font-normal">{{ $errorMessage }}</p>
                    @endif
                </div>
                <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
    @endif

</div>


</div>
