{{-- menghubungkan file main --}}
@extends('peserta.main')

{{-- judul halaman disini --}}
@section('title', 'Nomor Chilltalks')

{{-- membuat content disini --}}
@section('content')
<!-- start content -->
<div class="p-4 sm:ml-64 mt-14">
    <!-- Start block -->
    <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto">
            <h2 class="text-base mb-6 font-semibold leading-7 text-gray-900">Validasi Panitia</h2>
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <ol class="space-y-4 w-full">
                    <li>
                        <div class="w-full p-4 text-green-700 bg-green-100 border border-green-300 rounded-lg"
                            role="alert">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium">1. Bukti Transfer</h3>
                                <i class="fa-solid fa-check text-xl"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w-full p-4 text-green-700 bg-green-100 border border-green-300 rounded-lg"
                            role="alert">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium">2. Validasi Transaksi</h3>
                                <i class="fa-solid fa-check text-xl"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w-full p-4 text-green-700 bg-green-100 border border-green-300 rounded-lg"
                            role="alert">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium">3. Mendapat Nomor Peserta</h3>
                                <i class="fa-solid fa-check text-xl"></i>
                            </div>
                        </div>
                    </li>
                </ol>
                <section class="text-gray-600 body-font xl:col-span-2">
                    <div class="mx-auto flex items-center justify-center flex-col">
                        <div class="w-full text-center">
                            <img src="{{asset('images/maskot/TungguApaLagi.png')}}" class="w-1/2 lg:w-1/3 mx-auto"
                                alt="ivy wondering">
                            <p class="mb-8 leading-relaxed mt-10 text-center">Terima kasih telah mendaftar webinar kami! Silahkan bergabung dalam grup WhatsApp <a href="https://chat.whatsapp.com/GfqhEZCjEcR4xJ5pd39PGO" class="text-primary-lightblue hover:text-primary-blue underline"><b>DISINI</b></a> untuk mendapatkan informasi tambahan! Dan berikut adalah nomer peserta anda.</p>
                            <span class="border font-medium border-primary-lightblue p-4">Nomor Peserta: <span class="font-bold">{{$ctPeserta->nomer_peserta}}</span></span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
@endsection