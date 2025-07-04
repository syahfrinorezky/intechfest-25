@extends('peserta.main')

{{-- judul halaman disini --}}
@section('title', 'Dashboard Peserta')

@section('content')

<!-- start content -->
<div class="p-4 sm:ml-64 mt-14">
    <!-- Start block -->
    <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto">
            {{-- jika belum mendaftar lomba --}}
            <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lomba yang dipilih</h4>
            <div class="h-[70vh] flex flex-col items-center justify-center space-y-5">
                <img src="{{asset('images/maskot/404.svg')}}" alt="ivy pegang 404" class="w-1/2 sm:w-1/4">
                <h4 class="mb-2 text-lg text-center font-medium tracking-tight text-gray-900 dark:text-white">
                    Oops... Sepertinya kamu belum memilih lomba. 
                    <br>
                    Yuk cari lomba yang sesuai dengan kemampuanmu!
                </h4>
                <a href="/#lomba" class="text-white bg-primary-lightblue hover:bg-primary-blue focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-2">Daftar Lomba</a>
            </div>
        </div>
    </section>
</div>

@endsection