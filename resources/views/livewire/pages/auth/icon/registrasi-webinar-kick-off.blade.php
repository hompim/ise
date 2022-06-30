<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISE! 2022</title>

    <link rel="icon" href="{{ asset('images/logo-only.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
</head>
<body class=" bg-black font font-poppins">
<div class=" w-fit rounded-md mt-36 md:mx-auto justify-center md:w-10/12 mx-8 mb-8 bg-liteBlack font-poppins">

   <div class="bg-[#141414] relative overflow-hidden flex flex-row md:py-12 justify-between">
   <img class="md:ml-[88px] md:-translate-y-16 w-[88px]" src="{{ asset('images/logo-ise.svg') }}" alt="logo ise">
   <img class="right-0 md:translate-y-12  w-fit" src="{{ asset('images/isometric-city-webinar-kickoff.svg') }}" alt="">
   </div>

   <h2 class=" mt-12 mb-8 px-4 flex justify-center text-lg md:text-2xl font-bold text-white font-poppins">Form Pendaftaran Webinar Kick Off</h2>


   <div class="md:mx-12 mx-4 rounded-md shadow-sm ">

<div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
    <label for="name">Nama Lengkap</label>
    <input id="name" name="name" type="text" required
        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
        placeholder="Masukkan nama lengkap kamu">
</div>
<div class="mt-12 flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
    <label for="email-address">Nomor WhatsApp</label>
    <input id="" name="email" type="email" required
        class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
        placeholder="Masukkan nomor WhatsApp kamu">
</div>
<div class="mt-12 flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
    <label>Upload bukti poster di IG Story</label>
    <span class="flex flex-row gap-4 w-32 py-2 p-2 rounded-md bg-transparent !border border-[#6B7280] hover:border-pink-200  autofill:bg-transparent mt-4 text-white item-center mb-4">
    <img class="" src="{{ asset('images/upload.svg') }}" alt="">
    <button class="text-liteGray" >Add File</button>
    </span>


</div>
<div class="mt-12">
        <label for="Info Pendaftaran" class="block">
            <span class="block mb-2 font-medium text-white">Jenjang</span>
            <select name="jenjang" id="" class="text-liteGray w-full p-2 bg-transparent rounded-md focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200">
                <option value="no-answer">Dari manakah kamu mendapatkan informasi mengenai Bionix?</option>
                <option value="a" class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis?</option>
                <option value="b" >Lorem ipsum dolor sit amet consectetur adipisicing elit.</option>
                <option value="c">Lorem ipsum dolor sit amet consectetur adipisicing elit.</option>
            </select>
        </label>
    </div>
    <div class="flex items-center mt-12">
                <input id="remember_me" name="remember" type="checkbox"
                    class="w-4 h-4 text-pink-200 rounded cursor-pointer focus:ring-pink-200">
                <label for="remember_me" class="ml-2 block text-sm text-[#B5B3BC] font-poppins font-medium">
                Saya setuju dengan kebijakan privasi serta syarat dan ketentuan yang berlaku
                </label>
            </div>
</div>
<span class="flex justify-center mb-24 mt-12">
    <button class="w-64 py-2 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-4 text-white item-center mb-4">Kirim</button>
</span>
<div class="flex flex-col justify-around md:flex-row md:mx-16 md:justify-between  ">
<div class="md:mx-auto ml-36 -translate-y-4 lg:mx-0 w-fit lg:mb-0">
                    <a  href="https://wa.me/6285162852050" class="block transition duration-300 hover:scale-105">
                        <div class="bg-[#25D366]  rounded-xl px-2 py-1">
                            <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="whatsapp-icon">
                        </div>
                    </a>
                </div>
    
<div class="flex flex-row justify-center space-x-4  mb-12 items-center">
       <a href=""><svg class="fill-[#B5B3BC]" width="20" height="20" viewBox="0 0 20 20"  xmlns="http://www.w3.org/2000/svg">
<path d="M2.252 8C2.08416 8.65341 1.99949 9.32539 2 10C2 10.69 2.088 11.36 2.252 12H5.1C4.96518 10.6701 4.96518 9.32993 5.1 8H2.252ZM3.07 6H5.416C5.682 4.783 6.066 3.693 6.537 2.786C5.08518 3.48542 3.87722 4.60524 3.07 6ZM17.748 8H14.9C15.0348 9.32993 15.0348 10.6701 14.9 12H17.748C18.0847 10.6879 18.0847 9.31208 17.748 8ZM16.93 6C16.1228 4.60524 14.9148 3.48542 13.463 2.786C13.935 3.693 14.318 4.783 14.584 6H16.93ZM7.112 8C7.03708 8.66403 6.99968 9.33176 7 10C7 10.685 7.038 11.355 7.112 12H12.888C13.0386 10.6709 13.0386 9.32908 12.888 8H7.112ZM7.47 6H12.53C12.348 5.2483 12.0855 4.51841 11.747 3.823C11.119 2.568 10.447 2 10 2C9.552 2 8.881 2.568 8.253 3.823C7.938 4.455 7.673 5.19 7.47 6ZM3.07 14C3.87722 15.3948 5.08518 16.5146 6.537 17.214C6.065 16.307 5.682 15.217 5.416 14H3.07ZM16.93 14H14.584C14.318 15.217 13.934 16.307 13.463 17.214C14.9148 16.5146 16.1228 15.3948 16.93 14ZM7.47 14C7.673 14.81 7.938 15.545 8.253 16.177C8.881 17.432 9.553 18 10 18C10.448 18 11.119 17.432 11.747 16.177C12.062 15.545 12.327 14.81 12.53 14H7.47ZM10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20Z" />
</svg></a>
       <a href=""><svg class="fill-[#B5B3BC]" width="20" height="20" viewBox="0 0 20 20"  xmlns="http://www.w3.org/2000/svg">
<path d="M10 0C12.717 0 13.056 0.00999994 14.122 0.06C15.187 0.11 15.912 0.277 16.55 0.525C17.21 0.779 17.766 1.123 18.322 1.678C18.8305 2.1779 19.224 2.78259 19.475 3.45C19.722 4.087 19.89 4.813 19.94 5.878C19.987 6.944 20 7.283 20 10C20 12.717 19.99 13.056 19.94 14.122C19.89 15.187 19.722 15.912 19.475 16.55C19.2247 17.2178 18.8311 17.8226 18.322 18.322C17.822 18.8303 17.2173 19.2238 16.55 19.475C15.913 19.722 15.187 19.89 14.122 19.94C13.056 19.987 12.717 20 10 20C7.283 20 6.944 19.99 5.878 19.94C4.813 19.89 4.088 19.722 3.45 19.475C2.78233 19.2245 2.17753 18.8309 1.678 18.322C1.16941 17.8222 0.775931 17.2175 0.525 16.55C0.277 15.913 0.11 15.187 0.0599999 14.122C0.0129999 13.056 0 12.717 0 10C0 7.283 0.00999994 6.944 0.0599999 5.878C0.11 4.812 0.277 4.088 0.525 3.45C0.775236 2.78218 1.1688 2.17732 1.678 1.678C2.17767 1.16923 2.78243 0.775729 3.45 0.525C4.088 0.277 4.812 0.11 5.878 0.06C6.944 0.0129999 7.283 0 10 0ZM10 5C8.67392 5 7.40215 5.52678 6.46447 6.46447C5.52678 7.40215 5 8.67392 5 10C5 11.3261 5.52678 12.5979 6.46447 13.5355C7.40215 14.4732 8.67392 15 10 15C11.3261 15 12.5979 14.4732 13.5355 13.5355C14.4732 12.5979 15 11.3261 15 10C15 8.67392 14.4732 7.40215 13.5355 6.46447C12.5979 5.52678 11.3261 5 10 5ZM16.5 4.75C16.5 4.41848 16.3683 4.10054 16.1339 3.86612C15.8995 3.6317 15.5815 3.5 15.25 3.5C14.9185 3.5 14.6005 3.6317 14.3661 3.86612C14.1317 4.10054 14 4.41848 14 4.75C14 5.08152 14.1317 5.39946 14.3661 5.63388C14.6005 5.8683 14.9185 6 15.25 6C15.5815 6 15.8995 5.8683 16.1339 5.63388C16.3683 5.39946 16.5 5.08152 16.5 4.75ZM10 7C10.7956 7 11.5587 7.31607 12.1213 7.87868C12.6839 8.44129 13 9.20435 13 10C13 10.7957 12.6839 11.5587 12.1213 12.1213C11.5587 12.6839 10.7956 13 10 13C9.20435 13 8.44129 12.6839 7.87868 12.1213C7.31607 11.5587 7 10.7957 7 10C7 9.20435 7.31607 8.44129 7.87868 7.87868C8.44129 7.31607 9.20435 7 10 7Z" />
</svg>
</a>
       <a href=""><svg class="fill-[#B5B3BC]" width="22" height="20" viewBox="0 0 22 20"   xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14.948 0C13.9189 0 12.4504 0.45142 11.4028 1.73379C10.5795 2.74559 10.1679 4.0703 10.1783 5.68097C7.15693 5.27061 4.68021 3.76123 2.62433 1.0849C2.50063 0.927184 2.32487 0.833549 2.13753 0.833549C2.10633 0.833549 2.07512 0.836115 2.04272 0.841248C1.82418 0.875893 1.63573 1.03233 1.5467 1.25289C0.741933 3.22135 0.748842 4.99488 1.56056 6.55683C1.54439 6.55426 1.52704 6.55426 1.51084 6.55426C1.18245 6.55426 0.866789 6.8928 0.891086 7.31855C0.997463 9.1062 1.58948 10.4925 2.65672 11.4568C2.45438 11.635 2.3688 11.9351 2.4405 12.2134C2.77811 13.5099 3.76559 14.9179 5.27454 15.5874C4.1668 16.2285 2.8475 16.5465 1.49352 16.5465C1.22294 16.5465 0.951216 16.5337 0.679488 16.5081C0.664447 16.5068 0.649406 16.5068 0.635555 16.5068C0.356885 16.5068 0.11752 16.7107 0.0284973 17.0121C-0.0616821 17.3275 0.068959 17.6815 0.324489 17.8533C1.28189 18.4958 3.6881 20 7.21591 20C16.783 20 19.8772 10.6168 19.8772 6.07336C19.8737 5.78997 19.876 5.82329 19.861 5.67584C19.8841 5.64632 19.972 5.5745 20.0413 5.51551C20.3998 5.21547 21.0254 4.71918 21.8879 3.32136C22.0475 3.05978 22.0359 2.71611 21.8579 2.4686C21.7226 2.28137 21.57 2.20827 21.3965 2.20827C21.2728 2.20827 21.1398 2.24548 20.9964 2.30703C21.1583 1.99156 21.2913 1.65559 21.3977 1.30037C21.4809 1.02591 21.3907 0.787391 21.193 0.596309C21.0774 0.486029 20.9259 0.429606 20.7744 0.429606C20.668 0.429606 20.5628 0.456553 20.4669 0.510409C19.4193 1.09774 18.6376 1.35166 18.2919 1.42729C17.3865 0.50656 16.4164 0 14.948 0Z" />
</svg>
</a>
        <a href=""><svg class="fill-[#B5B3BC]" width="26" height="20" viewBox="0 0 26 20"  xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7156 4.99853C10.8561 4.99853 10.9965 5.04029 11.1193 5.12536L17.2129 9.29422C17.4352 9.44345 17.5702 9.71055 17.5702 9.99851C17.5702 10.2865 17.4352 10.5521 17.2129 10.7058L11.1193 14.8717C10.9952 14.9567 10.8561 14.9985 10.717 14.9985C10.5888 14.9985 10.4606 14.9627 10.3474 14.8941C10.1032 14.7463 9.95321 14.4703 9.95321 14.1659V5.83258C9.95321 5.52969 10.1032 5.2492 10.3474 5.10147C10.4606 5.03283 10.5888 4.99853 10.7156 4.99853ZM3.80917 0C1.71024 0 0 1.8681 0 4.16443V15.8311C0 18.1304 1.71024 20 3.80917 20H22.1936C24.2925 20 26 18.1304 26 15.8311V4.16443C26 1.8681 24.2925 0 22.1936 0H3.80917Z" />
</svg></a>
        <a href="">
        <svg width="18" height="20" viewBox="0 0 18 20" class="fill-[#B5B3BC]"  xmlns="http://www.w3.org/2000/svg">
<path d="M9.44267 0.016875C10.5333 0 11.6177 0.01 12.7008 0C12.7664 1.27562 13.2252 2.575 14.1589 3.47688C15.0908 4.40125 16.4089 4.82438 17.6914 4.9675V8.32312C16.4895 8.28375 15.282 8.03375 14.1914 7.51625C13.7164 7.30125 13.2739 7.02437 12.8408 6.74125C12.8352 9.17625 12.8508 11.6081 12.8252 14.0331C12.7602 15.1981 12.3758 16.3575 11.6983 17.3175C10.6083 18.9156 8.71642 19.9575 6.77329 19.99C5.58142 20.0581 4.39079 19.7331 3.37517 19.1344C1.69204 18.1419 0.507669 16.325 0.335169 14.375C0.31344 13.962 0.310104 13.5483 0.325169 13.135C0.475169 11.5494 1.25954 10.0325 2.47704 9.00062C3.85704 7.79875 5.79017 7.22625 7.60017 7.565C7.61704 8.79938 7.56767 10.0325 7.56767 11.2669C6.74079 10.9994 5.77454 11.0744 5.05204 11.5763C4.52345 11.9245 4.12398 12.4368 3.91517 13.0344C3.74267 13.4569 3.79204 13.9263 3.80204 14.375C4.00017 15.7425 5.31517 16.8919 6.71892 16.7675C7.64954 16.7575 8.54142 16.2175 9.02642 15.4269C9.18329 15.15 9.35892 14.8669 9.36829 14.5413C9.45017 13.0506 9.41767 11.5662 9.42767 10.0756C9.43454 6.71625 9.41767 3.36625 9.44329 0.0175L9.44267 0.016875Z" />
</svg>
</a>
        <a href=""> <svg class="fill-[#B5B3BC]" width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 8.00004C14.6484 7.99712 13.8046 8.16214 13.0168 8.48568C12.229 8.80921 11.5128 9.2849 10.9091 9.88553C10.3054 10.4862 9.82598 11.1999 9.4984 11.986C9.17082 12.7721 9.00146 13.6151 9 14.4667V21C9 21.2652 9.10536 21.5196 9.29289 21.7071C9.48043 21.8946 9.73478 22 10 22H12.3333C12.5986 22 12.8529 21.8946 13.0404 21.7071C13.228 21.5196 13.3333 21.2652 13.3333 21V14.4667C13.3331 14.1638 13.3967 13.8643 13.52 13.5876C13.6433 13.311 13.8236 13.0634 14.049 12.8611C14.2744 12.6587 14.5399 12.5062 14.8282 12.4133C15.1165 12.3205 15.4211 12.2895 15.7222 12.3222C16.2622 12.3903 16.7585 12.6541 17.1169 13.0637C17.4753 13.4733 17.6709 14.0002 17.6667 14.5445V21C17.6667 21.2652 17.772 21.5196 17.9596 21.7071C18.1471 21.8946 18.4015 22 18.6667 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V14.4667C21.9985 13.6151 21.8292 12.7721 21.5016 11.986C21.174 11.1999 20.6946 10.4862 20.0909 9.88553C19.4872 9.2849 18.771 8.80921 17.9832 8.48568C17.1954 8.16214 16.3516 7.99712 15.5 8.00004Z" />
<path  d="M6 9H3C2.44772 9 2 9.44771 2 10V21C2 21.5523 2.44772 22 3 22H6C6.55228 22 7 21.5523 7 21V10C7 9.44771 6.55228 9 6 9Z" />
<path  d="M4.5 7C5.88071 7 7 5.88071 7 4.5C7 3.11929 5.88071 2 4.5 2C3.11929 2 2 3.11929 2 4.5C2 5.88071 3.11929 7 4.5 7Z" />
</svg></a>
    </div>
</div>



</div>


</body>
</html>