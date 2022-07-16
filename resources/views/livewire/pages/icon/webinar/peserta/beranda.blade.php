<div class="px-8">
    <div
        class="{{$notif ? null : "hidden"}} bg-{{$alert_color}}-100 border-t-4 border-{{$alert_color}}-500 rounded-b text-{{$alert_color}}-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-{{$alert_color}}-500 mr-4"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                </svg>
            </div>
            <div>
                <p class="font-bold">{{$alert_header}}</p>
                <p class="text-sm">{!! $alert_content !!}</p>
            </div>
            <div class="flex-1 flex justify-end">
                <button type="button" title="Hapus" wire:click="closeNotif()" class="self-start"><i
                    class="fas fa-times"></i></button>
            </div>
        </div>
    </div>

    <h3 class="text-xl font-weight-bold my-4 text-white">Webinar Kick Off ISE! 2022</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="card p-8 rounded-xl" style=" background-color: #191a1e; border:0">
            <div class="col-span-10 md:col-span-6">

                <div class="grid md:grid-cols-2 gap-4 grid-cols-1">
                    <h4 class="text-lg font-bold text-white col-span-5 md:col-span-2">Informasi Peserta</h4>
                    <div>
                        <div>
                            <label for="team_name" class="mb-2 font-bold text-lg text-gray-300 ">Nama Peserta</label><br>
                            <p class="font-bold text-white ">{{ Auth::user()->name }}</p>
                        </div>
                        <div>
                            <label for="Email" class="mb-2 font-bold text-lg text-gray-300  mt-4">Email Peserta</label><br>
                            <p class="font-bold text-white ">{{ Auth::user()->email }}</p>
                        </div>
                        <div>
                            <label for="Email" class="mb-2 text-lg font-bold text-gray-300  mt-4">Link Virtual Background</label><br>
                            <a href="https://ise-its.com/VirtualBackgroundKickOff" target="_blank"><p class="font-bold text-blue-600">VirtualBackgroundKickOff</p></a>
                        </div>
                        <div class="mt-4 flex gap-4">
                            <a href="https://ise-its.com/WebinarKickOffPresensi" target="_blank"><button class="px-4 py-2 bg-purple-400 text-white font-bold rounded-md">Presensi</button></a>
                            <a href="https://ise-its.com/WebinarKickOffFeedback" target="_blank"><button class="px-4 py-2 bg-pink-400 text-white font-bold rounded-md">Feedback</button></a>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div class="card p-8 rounded-xl" style=" background-color: #191a1e; border:0">
            <div class="col-span-10 md:col-span-6">

                <div class="grid md:grid-cols-2 gap-4 grid-cols-1">
                    <h4 class="text-lg font-bold text-white col-span-5 md:col-span-2">Informasi Zoom</h4>
                    <div>
                        <div>
                            <label for="team_name" class="mb-2 font-bold text-gray-300">Hari, Tanggal</label><br>
                            <p class="font-bold text-white">16 Juli 2022</p>
                        </div>
                        <div>
                            <label for="Email" class="mb-2 font-bold text-gray-300 mt-4">Meeting ID</label><br>
                            <p class="font-bold text-white">96955075749</p>
                        </div>
                        <div>
                            <label for="Email" class="mb-2 font-bold text-gray-300 mt-4">Password</label><br>
                            <p class="font-bold text-white">ise2022</p>
                        </div>
                        <div>
                            <label for="Email" class="mb-2 font-bold text-gray-300   mt-4">Link Zoom</label><br>
                            <a target="_blank" href="https://ise-its.com/WebinarKickOffISE!2022"><p class="font-bold text-blue-600">WebinarKickOffISE!2022</p></a>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>

</div>
