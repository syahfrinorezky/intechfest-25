@extends('landing.main')
<link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}">

{{-- judul halaman disini --}}
@section('title', 'Chilltalks')

{{-- navbar --}}
@include('landing.layout.navbar-ct')

@section('content')
<div class="container mx-auto flex flex-wrap py-6">
    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <div>
                <img src="{{asset('images/lomba/ivy ct.png')}}" class="w-full md:w-2/3 lg:w-1/2 mx-auto" loading="lazy">
            </div>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="/#lomba" class="text-primary-lightblue text-sm font-bold uppercase pb-4">Seminar</a>
                <a href="#" class="text-3xl font-bold text-primary-lightblue pb-4">ChillTalks</a>
                <h1 class="text-2xl font-bold pb-3 mt-4">Deskripsi Seminar</h1>
                <p class="pb-3 text-justify">
                ChillTalks merupakan seminar berskala nasional yang membahas seputar teknologi informasi dan bertujuan untuk mengembangkan potensi diri serta meningkatkan pengetahuan di bidang teknologi informasi. Pada tahun ini ChillTalks akan membahas topik seputar "Level Up Your Digital Talent for the Gig Economy Era”    
                </p>
                    

                <h1 class="text-2xl font-bold pb-3 mt-4" id="timeline">Harga Pendaftaran</h1>
                <p class="pb-3 text-justify">Harga Pendaftaran Seminar ChillTalks yaitu :</p>
                <ul class="max-w-lg space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        <b>ONLINE (BCA) : Rp. 15.000</b>
                    </li>
                </ul>
                <ul class="mt-3 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        <b>OFFLINE (BCA) : Rp. 18.000</b>
                    </li>
                    <br>
                    <!-- <p class="pb-3 text-justify"><span><b>NOTE : </b></span>Pembayaran ke dana dikenakan biaya tambahan <b>Rp.500</b></p> -->
                </ul>
                
                <h1 class="text-2xl font-bold pb-3 mt-4" id="timeline">Nomor Rekening</h1>
                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        <b>BCA : 1420920021 a.n. <span style="color: #50BFD0;">NI NYOMAN MITASARI</span></b>
                    </li>
                    <li>
                        <b>BRI : 478301022773538 a.n. <span style="color: #50BFD0;">NI WAYAN DINA SINTA GUSNADI</span></b>
                    </li>
                </ul>

                <h1 class="text-2xl font-bold pb-3 mt-4" id="timeline">Timeline Seminar</h1>
                <ol class="items-center sm:flex">
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
                            <h3 class="text-md font-semibold text-gray-900 dark:text-white">Pendaftaran Seminar</h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Tanggal 20 Juli 2025</time>
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
                            <h3 class="text-md font-semibold text-gray-900 dark:text-white">Penutupan Pendaftaran Seminar</h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Tanggal 18 September 2025</time>
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
                            <h3 class="text-md font-semibold text-gray-900 dark:text-white">Acara Seminar</h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Tanggal 21 September 2025</time>
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
                <p class="text-xl font-semibold pb-5">Daftar Seminar</p>
                <p class="pb-2 text-justify">Jika tertarik silahkan klik tombol daftar dibawah ini</p>
                <a href="{{url('/chilltalks-peserta')}}"
                    class="w-full relative btn-slide overflow-hidden bg-primary-lightblue text-white font-bold text-sm uppercase rounded flex items-center justify-center px-2 py-3 mt-4">
                    <span class="relative z-10">Daftar</span>
                </a>
                <a href="{{url('/gb/download/ct')}}"
                    class="w-full relative btn-slide2 overflow-hidden bg-red-500 text-white font-bold text-sm uppercase rounded flex items-center justify-center px-2 py-3 mt-4">
                    <span class="relative z-10">Download Guidebook</span>
                </a>
            </div>

        </div>
    </aside>    

   
</div>

@endsection