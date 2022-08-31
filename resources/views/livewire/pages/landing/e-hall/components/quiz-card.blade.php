<div class="pt-6 md:pt-52 flex flex-col bg-black">
    {{-- Start Quiz Block --}}

    @foreach($quizzes as $quizNo => $quiz)

    <div class="mt-32 md:mt-0 mb-[145px] bg-liteBlack mx-6 md:mx-28 h-max rounded-2xl flex flex-col p-[24px] md:p-11 @if($currentQuiz == $quizNo)  @else hidden @endif">
        <h1 class="text-white text-lg  md:text-2xl mx-auto">Quiz {{$type_quiz->name}}</h1>
        <div class="flex flex-col md:flex-row mt-4 gap-14">
            {{-- Left Part --}}
            <div class="flex flex-col">
                <h2 class="text-white">
                    <span class="underline text-2xl underline-offset-4 decoration-purple-300 ">Quiz {{$quizNo+1}}</span>
                    <span class="text-lg ">
                        <span class="text-[#B221E5]">+10</span>
                        <span>Point</span></span>
                </h2>
                <p class="text-sm md:text-lg text-white mt-2">
                    {{$quiz->question}}
                </p>
                {{-- // Soal quiz --}}

                {{-- Section Jawaban --}}
                <!-- start: make cards row 1 -->
                {{-- Pilgan --}}
                @if ($quiz->question_type == "Pilgan")
                <div class="flex flex-col md:flex-row mt-[24px] md:mt-[46px] mx-auto gap-[24px] md:gap-[74px] pl-0">
                    <div wire:click="setAnswer('A')" class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] bg-[#2F2F2F] rounded-lg ">
                        <!-- A.  Lorem ipsum -->
                        <div class="text-white text-[14px] md:text-[20px] pl-[16px] pt-[13px]">
                            A. {{$quiz->opt_a}}
                        </div>
                        <!-- A.  Lorem ipsum -->
                    </div>
                    <div wire:click="setAnswer('B')" class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] bg-[#2F2F2F] rounded-lg ">
                        <!-- B.  Lorem ipsum -->
                        <div class="text-white text-[14px] md:text-[20px] pl-[16px] pt-[13px]">
                            B. {{$quiz->opt_b}}
                        </div>
                        <!-- B.  Lorem ipsum -->
                    </div>
                </div>
                <!-- end: make cards row 1 -->

                <!-- start: make cards row 2 -->
                <div class="flex flex-col md:flex-row mt-[24px] md:mt-[46px] mx-auto gap-[24px] md:gap-[74px] pl-0">
                    <div wire:click="setAnswer('C')" class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] bg-[#2F2F2F] rounded-lg ">
                        <!-- B.  Lorem ipsum -->
                        <div class="text-white text-[14px] md:text-[20px] pl-[16px] pt-[13px]">
                            C. {{$quiz->opt_c}}
                        </div>
                        <!-- B.  Lorem ipsum -->
                    </div>
                    <div wire:click="setAnswer('D')" class="w-[260px] md:w-[315px] h-[52px] md:h-[63px] bg-[#2F2F2F] rounded-lg ">
                        <!-- B.  Lorem ipsum -->
                        <div class="text-white text-[14px] md:text-[20px] pl-[16px] pt-[13px]">
                            D. {{$quiz->opt_d}}
                        </div>
                        <!-- B.  Lorem ipsum -->
                    </div>
                </div>
                {{-- End of pilgan --}}
                @endif

                @if ($quiz->question_type == "ToF")
                {{-- Tof --}}
                <div class="flex flex-row mt-10 mx-auto gap-8 md:gap-14">
                    <button
                        class="bg-[#19AC66] w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl">True</button>
                    <button
                        class="bg-[#DE4343] w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl">False</button>
                </div>
                {{-- End of Tof --}}
                @endif

                {{-- choose Pic --}}

                @if ($quiz->question_type == "Picture")
                <div class="md:flex md:flex-row mt-[46px] mx-auto gap-[50px] md:gap-[74px] pl-0">
                    <div class="flex flex-col">
                        <div class="relative group">
                            <div
                                class="absolute w-[177px] h-[159px] blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] animate-tilt">
                            </div>
                            <div
                                class="relative w-[177px] h-[159px] bg-[#B5B3BC] text-white text-[20px] text-center pt-[56px] rounded-lg">
                                <img src="{{$quiz->opt_a}}" alt="">
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
                                <img src="{{$quiz->opt_b}}" alt="">
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
                    <button wire:click="moveQuestion(-1)" class="bg-[#2F2F2F] w-[58px] h-[58px] text-white items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button wire:click="moveQuestion(1)" class="bg-[#2F2F2F] w-[58px] h-[58px] text-white items-center rounded-lg">
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
                        <button wire:click="moveToQuestion({{ $quizNo - $currentQuiz }})" class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] {{$currentQuiz == $quizNo ? "bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] text-white" : "bg-[#2F2F2F] text-white"}} mx-auto  text-2xl font-bold rounded-lg">{{$quizNo+1}}</button>
                    @endforeach
                </div>
                <button
                    wire:click="submitAnswer"class="mx-auto text-white md:text-xl rounded-lg col-span-2 btn px-8 md:px-10 py-2 mt-8 md:mt-100 font-semibold">Submit</button>
                <div class="flex flex-row gap-7 mx-auto mt-12 md:hidden">
                    <button class="bg-[#2F2F2F] w-[35px] h-[35px] text-white items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="bg-[#2F2F2F] w-[35px] h-[35px] text-white items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>


        </div>

        {{-- <!-- start: pembahasan-->
        <div class="divide-y-[1px] mt-[55px] divide-white">
            <h1 class="text-white"></h1>
            <h1 class="text-white pt-[29px] text-[14px] md:text-[20px] ">Jawaban :
                <br><span class="text-[#B5B3BC] font-bold text-[18px] md:text-[24px]">A. Lorem Ipsum</span>
                <br><span class="text-white text-[14px] md:text-[20px] ">Pembahasan :</span>
                <br><span class="text-[#B5B3BC] text-[14px] md:text-[20px]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a,
                    mattis tellus. Sed
                    dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed
                    risus. Maecenas
                    eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per
                    conubia nostra
                </span>
            </h1>
        </div>
        <!-- end: pembahasan--> --}}
    </div>

    @endforeach
</div>
