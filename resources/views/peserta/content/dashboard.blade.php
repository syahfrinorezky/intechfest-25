{{-- menghubungkan file main --}}
@extends('peserta.main')

{{-- judul halaman disini --}}
@section('title', 'Dashboard Peserta')

@section('content')

<!-- start content -->
<div class="p-4 sm:ml-64 mt-14">
    <!-- Start block -->
    <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto">

            <ol class="relative border-l border-gray-200 dark:border-gray-700">
                <li class="mb-10 ml-6">
                    <span
                        class="absolute flex items-center object-right-bottom justify-center w-8 h-8 rounded-full -left-4 dark:ring-gray-900 dark:bg-blue-900">
                        <img class="bg-white" src="{{asset('images/maskot/maskot-happy-kanan.png')}}"
                            alt="Ivy" />
                    </span>
                    <div class="items-center p-4 bg-white border border-primary-lightblue rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                        <div class="text-md font-normal text-gray-700 dark:text-gray-300">Selamat datang<span
                                class="bg-gray-100 text-gray-800 text-sm mr-1 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300 ml-1 font-bold">Future
                                Crafters!</span>perkenalkan namaku
                            <a class="font-semibold underline text-primary-lightblue hover:text-primary-blue dark:text-blue-500 transition-all ease-in-out" href="https://www.instagram.com/stories/highlights/18150219730256422/">Ivy</a> yang
                            akan memandu kalian dari sekarang!
                        </div>
                    </div>
                </li>
                <li class="mb-10 ml-6">
                    <span
                        class="absolute flex items-center object-right-bottom justify-center w-8 h-8 rounded-full -left-4 dark:ring-gray-900 dark:bg-blue-900">
                        <img class="bg-white" src="{{asset('images/maskot/maskot-happy-kanan.png')}}"
                            alt="Ivy" />
                    </span>
                    <div
                        class="items-center p-4 bg-white border border-primary-lightblue rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                        <div class="text-md font-normal text-gray-700 dark:text-gray-300">Pertama-tama yuk isi dulu data diri kalian <a href="{{url('/profil-peserta')}}" class="font-semibold underline text-primary-lightblue hover:text-primary-blue dark:text-blue-500 transition-all ease-in-out">disini</a> agar kita bisa kenal lebih dekat!
                        </div>
                    </div>
                </li>
                <li class="mb-10 ml-6">
                    <span
                        class="absolute flex items-center object-right-bottom justify-center w-8 h-8 rounded-full -left-4 dark:ring-gray-900 dark:bg-blue-900">
                        <img class="bg-white" src="{{asset('images/maskot/maskot-happy-kanan.png')}}"
                            alt="Ivy" />
                    </span>
                    <div
                        class="items-center p-4 bg-white border border-primary-lightblue rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                        <div class="text-md font-normal text-gray-700 dark:text-gray-300">Selanjutnya kalau kalian tertarik untuk mendaftar lomba, bisa dilihat jenis-jenis daftar lomba beserta penjelasannya
                            <a href="{{url('/#lomba')}}" class="font-semibold underline text-primary-lightblue hover:text-primary-blue dark:text-blue-500 transition-all ease-in-out">disini</a>
                        </div>
                    </div>
                </li>
                <li class="mb-10 ml-6">
                    <span
                        class="absolute flex items-center object-right-bottom justify-center w-8 h-8 rounded-full -left-4 dark:ring-gray-900 dark:bg-blue-900">
                        <img class="bg-white" src="{{asset('images/maskot/maskot-happy-kanan.png')}}"
                            alt="Ivy" />
                    </span>
                    <div
                        class="items-center p-4 bg-white border border-primary-lightblue rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                        <div class="text-md font-normal text-gray-700 dark:text-gray-300">Lalu jika kalian tertarik mengikuti seminar kami yang bernama ChillTalks yang tentunya akan diisi dengan narasumber dan topik yang keren, kalian bisa daftar
                            <a href="{{url('/#chilltalks')}}" class="font-semibold underline text-primary-lightblue hover:text-primary-blue dark:text-blue-500 transition-all ease-in-out">disini</a>
                        </div>
                    </div>
                </li>
                <li class="mb-10 ml-6">
                    <span
                        class="absolute flex items-center object-right-bottom justify-center w-8 h-8 rounded-full -left-4 dark:ring-gray-900 dark:bg-blue-900">
                        <img class="bg-white" src="{{asset('images/maskot/maskot-happy-kanan.png')}}"
                            alt="Ivy" />
                    </span>
                    <div
                        class="items-center p-4 bg-white border border-primary-lightblue rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                        <div class="text-md font-normal text-gray-700 dark:text-gray-300">Mungkin hanya segitu saja informasi yang ingin aku sampaikan kepada kalian para <span
                            class="bg-gray-100 text-gray-800 text-sm mr-1 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300 ml-1 font-bold">Future
                            Crafters!</span> aku ucapkan semangat <span
                            class="bg-gray-100 text-gray-800 text-sm mr-1 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300 ml-1 font-bold">Make it happen!</span> dan terima kasih
                        </div>
                    </div>
                </li>
            </ol>

        </div>
    </section>
</div>

@endsection