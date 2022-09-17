<div class="flex flex-col pt-6 bg-black md:pt-52">
    {{-- Start Quiz Block --}}

    @foreach ($quizzes as $quizNo => $quiz)
        <div
            class="mt-32 md:mt-0 mb-[145px] bg-liteBlack mx-6 md:mx-28 h-max rounded-2xl flex flex-col p-[24px] md:p-11 @if ($currentQuiz == $quizNo) @else hidden @endif">
            <h1 class="mx-auto text-lg text-white md:text-2xl">Quiz {{ $type_quiz->name }}</h1>
            <div class="flex flex-col mt-4 md:flex-row gap-14">
                {{-- Left Part --}}
                <div class="flex flex-col w-full lg:w-1/2">
                    <h2 class="text-white">

                        @if (Auth::check() && Auth::user()->userable_type == 'App\Models\Member')
                            <span class="text-xl underline underline-offset-4 decoration-purple-300 ">Score :
                                {{ Auth::user()->userable->hois_point }}</span><br>
                        @endif
                        <span class="text-2xl underline underline-offset-4 decoration-purple-300 ">Quiz
                            {{ $quizNo + 1 }}</span>
                        <span class="text-lg ">
                            (
                            <span class="text-[#B221E5]">300</span>
                            <span>Point</span>
                            )
                        </span>
                    </h2>
                    <p class="mt-2 text-sm text-white md:text-lg ">
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
                                class="w-fit px-4 md:w-[315px] font-sm py-4 {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'A' ? 'bg-pink-300 shadow-md shadow-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }}  rounded-lg transition duration-300 hover:-translate-y-2">
                                <!-- A.  Lorem ipsum -->
                                <div class="text-white">
                                    A. {{ $quiz->opt_a }}
                                </div>
                                <!-- A.  Lorem ipsum -->
                            </button>
                            <button wire:click="setAnswer('B')"
                                class="w-fit px-4 md:w-[315px] font-sm py-4  {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'B' ? 'bg-pink-300 shadow-md shadow-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }} rounded-lg transition duration-300 hover:-translate-y-2">
                                <!-- B.  Lorem ipsum -->
                                <div class="text-white">
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
                                class="w-fit px-4 md:w-[315px] font-sm py-4  {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'C' ? 'bg-pink-300 shadow-md shadow-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }} rounded-lg transition duration-300 hover:-translate-y-2">
                                <!-- B.  Lorem ipsum -->
                                <div class="text-white">
                                    C. {{ $quiz->opt_c }}
                                </div>
                                <!-- B.  Lorem ipsum -->
                            </button>
                            <button wire:click="setAnswer('D')"
                                class="w-fit px-4 md:w-[315px] font-sm py-4   {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'D' ? 'bg-pink-300 shadow-md shadow-pink-300' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }} rounded-lg transition duration-300 hover:-translate-y-2">
                                <!-- B.  Lorem ipsum -->
                                <div class="text-white">
                                    D. {{ $quiz->opt_d }}
                                </div>
                                <!-- B.  Lorem ipsum -->
                            </button>
                        </div>
                        {{-- End of pilgan --}}
                    @endif

                    @if ($quiz->question_type == 'ToF')
                        {{-- Tof --}}
                        <div class="flex flex-row justify-center gap-8 mx-auto mt-10 md:gap-14">
                            <button wire:click="setAnswer('True')"
                                class="bg-[#19AC66] {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'True' ? 'shadow-xl shadow-[#19AC66]' : 'bg-[#2F2F2F]') : 'bg-[#2F2F2F]' }} w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl transition duration-300 hover:-translate-y-2">True</button>
                            <button wire:click="setAnswer('False')"
                                class="bg-[#DE4343]  {{ isset($answers[$currentQuiz]) ? ($answers[$currentQuiz] == 'False' ? 'shadow-xl shadow-[#DE4343]' : '') : '' }} w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl transition duration-300 hover:-translate-y-2">False</button>
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
                                        class="relative w-[177px] h-[159px] bg-[#B5B3BC] text-white text-center pt-[56px] rounded-lg">
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
                                    <div class="text-white text-center pt-[56px]">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mx-auto" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button wire:click="moveQuestion(1)"
                            class="bg-[#2F2F2F] w-[58px] h-[58px] text-white items-center rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mx-auto" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        @if (Auth::check())
                            @if ($quizStatus[$currentQuiz]['is_done'])
                                <p class="text-white ">Anda Sudah Menjawab Quiz ini dan bisa melihat pembahasan di
                                    bawah.</p>
                            @else
                                <button
                                    wire:click="submitAnswer"class="col-span-2 px-8 py-2 mx-auto mt-8 font-semibold text-white rounded-lg md:text-xl btn md:px-10 md:mt-100">Submit</button>
                            @endif
                        @else
                            <a class="col-span-2 px-8 py-2 mx-auto mt-8 font-semibold text-white rounded-lg md:text-xl btn md:px-10 md:mt-100"
                                href="{{ route('login') }}">Login</a>
                        @endif
                    </div>
                    @if (Auth::check() && $quizStatus[$currentQuiz]['is_done'])
                        <!-- start: pembahasan-->
                        <div class="divide-y-[1px] mt-[55px] divide-white">
                            <h1 class="text-white"></h1>
                            <h1 class="text-white pt-[29px] text-[14px] md:text-[20px] ">Jawaban yang benar:
                                <br><span
                                    class="text-[#B5B3BC] font-bold text-[18px] md:text-[24px]">{{ $quizzes[$currentQuiz]->answer }}</span>
                                <br><span class="text-white text-[14px] md:text-[20px] ">Pembahasan :</span>
                                <br><span class="text-[#B5B3BC] text-[14px] md:text-[20px]">
                                    {!! $quizzes[$currentQuiz]->explanation !!}
                                </span>
                            </h1>
                        </div>
                        <!-- end: pembahasan-->
                    @endif
                </div>

                {{-- Right Part --}}
                <div class="flex flex-col mx-auto">
                    <div class="grid grid-cols-2 gap-4 px-12 md:px-0 ">
                        @foreach ($quizzes as $quizNo => $quiz)
                            <button type="button" wire:click="moveToQuestion({{ $quizNo }})"
                                class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] {{ $currentQuiz == $quizNo ? 'bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] text-white' : ($quizStatus[$quizNo]['is_done'] ? ($quizStatus[$quizNo]['status'] ? 'bg-green-500 text-white' : 'bg-red-500 text-white') : 'bg-[#2F2F2F] text-white') }} mx-auto  text-2xl font-bold rounded-lg">{{ $quizNo + 1 }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
