<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verifikasi</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}">
</head>
<body style="font-Montserrat">
    <section class="dark:bg-gray-900 relative overflow-y-hidden h-screen">
        
        {{-- ornamen image bottom --}}
        <img src="{{asset('images/ornamen/Group 8.png')}}" alt="Ornamen image" class="absolute right-0 bottom-0 hidden lg:block w-[200px] -rotate-90" loading="lazy">
        <img src="{{asset('images/ornamen/Group 8.png')}}" alt="Ornamen image" class="absolute left-0 bottom-0 hidden lg:block w-[200px]" loading="lazy">

        {{-- ornamen image top --}}
        <img src="{{asset('images/ornamen/Group 8.png')}}" alt="Ornamen image" class="absolute top-0 left-0 hidden lg:block w-[200px] rotate-90" loading="lazy">
        <img src="{{asset('images/ornamen/Group 8.png')}}" alt="Ornamen image" class="absolute top-0 right-0 hidden lg:block w-[200px] -rotate-180" loading="lazy">




        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:h-screen h-screen">
            {{-- logo --}}
            <a href="/" class="flex items-center mb-6 text-2xl text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="{{asset('images/logo/logo.png')}}" alt="logo">
                <span class="font-semibold">Intech</span>fest
            </a>
            {{-- card --}}
            <div class="md:w-full relative z-50 bg-white rounded-lg shadow-lg shadow-gray-300 dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 overflow-x-hidden w-full">
                {{-- content otp --}}
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 " id="form-otp">
                    <h1 class="text-xl leading-tight tracking-normal text-gray-900 md:text-2xl dark:text-white text-center">
                        Verifikasi Akun
                    </h1>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                        Email verifikasi sudah dikirim ke alamat email 
                    </p>
                    <div class="flex justify-center">
                        <a href="https://mail.google.com/mail/" class="text-white bg-primary-lightblue hover:bg-primary-blue focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all ease-in-out">Verifikasi Sekarang</a>
                    </div>
                    <div class="lg:translate-y-[15%] md:translate-y-[10%] p-3 w-full space-y-2 md:space-y-1 sm:p-">
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400 mb-4">
                                Tidak menerima email? 
                                <form action="{{ url ('/email/verification-notification')}}" method="POST">
                                    @csrf
                                    <button class="mb-4 md:-ms-24 focus:outline-cyan-500 font-semibold underline text-primary-lightblue hover:text-primary-blue dark:text-primary-500 cursor-pointer">kirim ulang</button>
                                </form>
                            </p>
                        </div>
                        <p class="text-sm font-bold text-gray-500 text-justify dark:text-gray-400 italic"><span class="font-semibold">Note: </span> Silahkan melakukan verifikasi dengan perangkat dan browser yang sama sesuai email yang terdaftar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/7eaa0f0932.js" crossorigin="anonymous"></script>

</body>
</html>