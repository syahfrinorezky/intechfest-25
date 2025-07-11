@extends('landing.main')
<link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}">

{{-- judul halaman disini --}}
@section('title', 'Capture The Flag')

{{-- navbar --}}
@include('landing.layout.navbar-lomba')

@section('content')
<div class="container mx-auto flex flex-wrap py-6">
    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <div>
                <img src="{{asset('images/lomba/ctfilus25.png')}}" class="w-full md:w-2/3 lg:w-1/2 mx-auto" loading="lazy">
            </div>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="/#lomba" class="text-primary-lightblue text-sm font-bold uppercase pb-4">Lomba</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Politeknik Negeri Bali <span class="text-primary-lightblue">Capture The Flag</span></a>
                <h1 class="text-2xl font-bold pb-3 mt-4">Deskripsi Lomba</h1>
                <p class="pb-3 text-justify">PNBCTF (Politeknik Negeri Bali Capture The Flag) merupakan salah satu cabang perlombaan dalam rangkaian kegiatan Information and Technology Festival (IntechFest) 2025. Perlombaan ini berfokus pada bidang hacking, di mana peserta secara individu maupun tim ditantang untuk menemukan file atau string tersembunyi dalam sistem yang dikenal dengan istilah "Flag". Pada tahun ini, PNBCTF mengusung format jeopardy sebagai sistem pelaksanaannya. Perlombaan ini terbuka bagi masyarakat umum dengan rentang usia 15 hingga 25 tahun. Melalui kegiatan ini, diharapkan dapat mendorong minat dan potensi generasi muda dalam memahami aspek keamanan dan ancaman siber, sekaligus memperkuat kemampuan mereka dalam menjaga sistem dari berbagai serangan seiring dengan pesatnya perkembangan teknologi informasi.
                </p>
                <h1 class="text-2xl font-bold pb-3 mt-4" id="timeline">Timeline Lomba</h1>
                <ol class="items-start sm:flex">
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-primary-lightblue dark:text-blue-300"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-md font-semibold text-gray-900 dark:text-white">Pendaftaran
                            </h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Tanggal 13 Juli 2025</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pendaftaran lomba PNBCTF akan dilakukan pada tanggal 13 Juli - 1 Agustus 2025</p>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-primary-lightblue dark:text-blue-300"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-md font-semibold text-gray-900 dark:text-white">Perlombaan PNBCTF</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Tanggal 7 September 2025</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Perlombaan PNBCTF akan
                                dilaksanakan pada tanggal 7 September 2025</p>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-primary-lightblue dark:text-blue-300"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Pengumpulan Write-Up</h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Tanggal 7 September 2025</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengumpulan write-up akan dilaksanakan selama dua hari, yaitu pada tanggal 7–8 September 2025.</p>
                        </div>
                    </li>
                </ol>

            </div>
        </article>
    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3" id="gabung">
        <div class="sticky top-[70px]">
            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Gabung Lomba</p>
                <p class="pb-2 text-justify">Jika tertarik silahkan klik tombol daftar lomba dibawah ini, atau klik
                    download
                    guidebook untuk membaca panduan lomba.</p>
                <a href="/ctf"
                    class="w-full relative btn-slide overflow-hidden bg-primary-lightblue text-white font-bold text-sm uppercase rounded flex items-center justify-center px-2 py-3 mt-4">
                    <span class="relative z-10">Daftar Lomba</span>
                </a>
                <a href="{{url('/gb/download/ctf')}}"
                    class="w-full relative btn-slide2 overflow-hidden bg-red-500 text-white font-bold text-sm uppercase rounded flex items-center justify-center px-2 py-3 mt-4">
                    <span class="relative z-10">Download Guidebook</span>
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <div class="flex justify-center">
                    <div class="flex flex-col gap-4 items-center justify-between">
                        <h3 class="text-2xl font-bold text-gray-900">Penutupan pendaftaran</h3>
                        <span id="countdown" class="text-2xl font-semibold text-gray-700"></span>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <div class="w-full flex pt-6">
        <a href="{{url('/detail-wdc')}}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
            <p class="text-lg text-primary-lightblue hover:text-primary-blue font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i>
                Sebelumnya</p>
            <p class="pt-2">Politeknik Negeri Bali Web
                Design Competition</p>
        </a>
        <a href="{{url('/detail-dc')}}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
            <p class="text-lg text-primary-lightblue hover:text-primary-blue font-bold flex items-center justify-end">Berikutnya <i
                    class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2">Politeknik Negeri Bali Design Challenge</p>
        </a>
    </div>
</div>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("August 01, 2025 23:59:59").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {            
        // Get today's date and time
        var now = new Date().getTime();            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);            
        // Output the result in an element with id="countdown" 
        document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds +
            "s ";            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
@endsection