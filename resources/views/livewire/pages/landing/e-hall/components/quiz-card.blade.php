<div class="pt-6 md:pt-52 flex flex-col bg-black">
    {{-- Start Quiz Block --}}

    @foreach ($quizzes as $quizNo => $quiz)
        <div
            class="mt-32 md:mt-0 mb-[145px] bg-liteBlack mx-6 md:mx-28 h-max rounded-2xl flex flex-col p-[24px] md:p-11 @if ($currentQuiz == $quizNo) @else hidden @endif">
            <h1 class="text-white text-lg  md:text-2xl mx-auto">Quiz {{ $type_quiz->name }}</h1>
            <div class="flex flex-col md:flex-row mt-4 gap-14">
                {{-- Left Part --}}
                <div class="flex flex-col">
                    <h2 class="text-white">
                        @if (Auth::check() && Auth::user()->userable_type == 'App\Models\Member')
                            <span class="underline text-xl underline-offset-4 decoration-purple-300 ">Score :
                                {{ Auth::user()->userable->hois_point }}</span><br>
                        @endif
                        <span class="underline text-2xl underline-offset-4 decoration-purple-300 ">Quiz
                            {{ $quizNo + 1 }}</span>
                        <span class="text-lg ">
                            <span class="text-[#B221E5]">+10</span>
                            <span>Point</span></span>
                    </h2>
                    <p class="text-sm md:text-lg text-white mt-2">
                        {{ $quiz->question }}
                    </p>
                    {{-- // Soal quiz --}}

                    {{-- Section Jawaban --}}
                    <!-- start: make cards row 1 -->
                    {{-- Pilgan --}}
                    @if ($quiz->question_type == 'Pilgan')
                        <div
                            class="flex flex-col md:flex-row mt-[24px] md:mt-[46px] mx-auto gap-[24px] md:gap-[74px] pl-0">
                            <button wire:click="setAnswer('A')"
                                class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] {{$quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['correctAnswer'] == 'A' ? "bg-green-500" : ""}} {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'A' ? 'bg-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }}  rounded-lg">
                                <!-- A.  Lorem ipsum -->
                                <div class="text-white text-[20px]">
                                    A. {{ $quiz->opt_a }}
                                </div>
                                <!-- A.  Lorem ipsum -->
                            </button>
                            <button wire:click="setAnswer('B')"
                                class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] {{$quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['correctAnswer'] == 'B' ? "bg-green-500" : ""}} {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'B' ? 'bg-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }} rounded-lg ">
                                <!-- B.  Lorem ipsum -->
                                <div class="text-white text-[20px]">
                                    B. {{ $quiz->opt_b }}
                                </div>
                                <!-- B.  Lorem ipsum -->
                            </button>
                        </div>
                        <!-- end: make cards row 1 -->

                        <!-- start: make cards row 2 -->
                        <div
                            class="flex flex-col md:flex-row mt-[24px] md:mt-[46px] mx-auto gap-[24px] md:gap-[74px] pl-0">
                            <button wire:click="setAnswer('C')"
                                class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] {{$quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['correctAnswer'] == 'C' ? "bg-green-500" : ""}} {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'C' ? 'bg-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }} rounded-lg ">
                                <!-- B.  Lorem ipsum -->
                                <div class="text-white text-[20px]">
                                    C. {{ $quiz->opt_c }}
                                </div>
                                <!-- B.  Lorem ipsum -->
                            </button>
                            <button wire:click="setAnswer('D')"
                                class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] {{$quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['correctAnswer'] == 'D' ? "bg-green-500" : ""}} {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'D' ? 'bg-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }} rounded-lg ">
                                <!-- B.  Lorem ipsum -->
                                <div class="text-white text-[20px]">
                                    D. {{ $quiz->opt_d }}
                                </div>
                                <!-- B.  Lorem ipsum -->
                            </button>
                        </div>
                        {{-- End of pilgan --}}
                    @endif

                    @if ($quiz->question_type == 'ToF')
                        {{-- Tof --}}
                        <div class="flex flex-row justify-center mt-10 mx-auto gap-8 md:gap-14">
                            <button wire:click="setAnswer('True')"
                                class="bg-[#19AC66] {{$quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['correctAnswer'] == 'True' ? "bg-green-500" : ""}} {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'True' ? 'shadow-lg shadow-indigo-500/50' : '') : '' }} w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl">True</button>
                            <button wire:click="setAnswer('False')"
                                class="bg-[#DE4343] {{$quizStatus[$currentQuiz]['is_done'] && $quizStatus[$currentQuiz]['correctAnswer'] == 'False' ? "bg-green-500" : ""}} {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'False' ? 'shadow-lg shadow-indigo-500/50' : '') : '' }} w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl">False</button>
                        </div>
                        {{-- End of Tof --}}
                    @endif

                    {{-- choose Pic --}}

                    @if ($quiz->question_type == 'Picture')
                        <div class="md:flex md:flex-row mt-[46px] mx-auto gap-[50px] md:gap-[74px] pl-0">
                            <div class="flex flex-col">
                                <div class="relative group">
                                    <div
                                        class="absolute w-[177px] h-[159px] blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] animate-tilt">
                                    </div>
                                    <div
                                        class="relative w-[177px] h-[159px] bg-[#B5B3BC] text-white text-[20px] text-center pt-[56px] rounded-lg">
                                        <img src="{{ $quiz->opt_a }}" alt="">
                                    </div>
                                    <div
                                        class="w-[177px] h-[46.8px] mt-[12px] bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-lg ">
                                        <!-- pic1 -->
                                        <div class="text-white text-[28px] text-center pt-[2px]">
                                            A
                                        </div>
                                        <!-- pic1 -->
                                    </div>

                                </div>
                            </div>

                            <div class="flex flex-col mt-[46px] md:mt-0">
                                <div class="w-[177px] h-[159px] bg-[#B5B3BC] rounded-lg ">
                                    <!-- pic2 -->
                                    <div class="text-white text-[20px] text-center pt-[56px]">
                                        <img src="{{ $quiz->opt_b }}" alt="">
                                    </div>
                                    <!-- pic2 -->

                                </div>

                                <div class="w-[177px] h-[46.8px] mt-[12px] bg-[#2F2F2F] rounded-lg ">
                                    <!-- pic1 -->
                                    <div class="text-white text-[28px] text-center pt-[2px]">
                                        B
                                    </div>
                                    <!-- pic1 -->
                                </div>
                            </div>


                        </div>
                        {{-- end of choose pic --}}
                    @endif
                    <!-- end: make cards row 2 -->



                    <div class="md:flex flex-row gap-7 mt-[36px] hidden">
                        <button wire:click="moveQuestion(-1)"
                            class="bg-[#2F2F2F] w-[58px] h-[58px] text-white items-center rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button wire:click="moveQuestion(1)"
                            class="bg-[#2F2F2F] w-[58px] h-[58px] text-white items-center rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Right Part --}}
                <div class="flex flex-col mx-auto">
                    <div class="grid grid-cols-2 gap-4 px-12 md:px-0  ">
                        @foreach ($quizzes as $quizNo => $quiz)
                            <button type="button" wire:click="moveToQuestion({{ $quizNo }})"
                                class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] {{ $currentQuiz == $quizNo ? 'bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] text-white' : ($quizStatus[$quizNo]['is_done'] ? ($quizStatus[$quizNo]['status'] ? 'bg-green-500 text-white' : 'bg-red-500 text-white') : 'bg-[#2F2F2F] text-white') }} mx-auto  text-2xl font-bold rounded-lg">{{ $quizNo + 1 }}</button>
                        @endforeach
                    </div>

                    @if (Auth::check())
                        @if ($quizStatus[$currentQuiz]['is_done'])
                            <p class=" text-white">Anda Sudah Menjawab Quiz ini.</p>
                        @else
                            <button
                                wire:click="submitAnswer"class="mx-auto text-white md:text-xl rounded-lg col-span-2 btn px-8 md:px-10 py-2 mt-8 md:mt-100 font-semibold">Submit</button>
                        @endif
                    @else
                        <a class="mx-auto text-white md:text-xl rounded-lg col-span-2 btn px-8 md:px-10 py-2 mt-8 md:mt-100 font-semibold"
                            href="{{ route('login') }}">Login</a>
                </div>
    @endif

    <div class="flex flex-row gap-7 mx-auto mt-12 md:hidden">
        <button class="bg-[#2F2F2F] w-[35px] h-[35px] text-white items-center rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button class="bg-[#2F2F2F] w-[35px] h-[35px] text-white items-center rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</div>


</div>

@if (Auth::check() && $quizStatus[$currentQuiz]['is_done'])
    <!-- start: pembahasan-->
    <div class="divide-y-[1px] mt-[55px] divide-white">
        <h1 class="text-white"></h1>
        <h1 class="text-white pt-[29px] text-[14px] md:text-[20px] ">Jawaban :
            <br><span class="text-[#B5B3BC] font-bold text-[18px] md:text-[24px]">{{ $quizzes[$currentQuiz]->answer }}</span>
            <br><span class="text-white text-[14px] md:text-[20px] ">Pembahasan :</span>
            <br><span class="text-[#B5B3BC] text-[14px] md:text-[20px]">
                {!! $quizzes[$currentQuiz]->explanation !!}
            </span>
        </h1>
    </div>
    <!-- end: pembahasan-->
@endif

</div>
@endforeach
</div>

@push('js')
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
        Livewire.on('Answer', status => {
            if (status == "Correct") {
                Swal.fire({
                    icon: 'success',
                    title: 'Jawaban Anda benar!! Point +300',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Jawaban Anda salah',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })


        Livewire.on('submit', () => {
            Swal.fire({
                icon: 'warning',
                title: 'Apakah Anda yakin ?',
                showDenyButton: true,
                confirmButtonText: 'Iya',
                denyButtonText: 'Batal',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Livewire.emit('submitAnswer')
                }
            })
        })

        Livewire.on('alert', (message) => {
            Swal.fire({
                icon: 'warning',
                title: message,
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>
@endpush
