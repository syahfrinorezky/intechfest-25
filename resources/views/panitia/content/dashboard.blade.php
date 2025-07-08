@extends('panitia.main')

@section('title', 'Dashboard Panitia')

@section('content')

<main class="p-4 md:ml-64 h-auto pt-20">

  <!-- Sambutan -->
  <div class="p-4 mb-4 rounded-lg text-white bg-gradient-to-r from-green-600 to-green-700 shadow-md">
    <h3 class="text-lg md:text-xl font-bold flex items-center gap-2">
      <img src="{{ asset('images/logo/ivydboard.png') }}" alt="Maskot" class="h-10 md:h-12 transform -translate-y-1">
      Selamat Datang, {{ auth()->user()->name }}!
    </h3>
    <p class="text-m italic mt-1">Semoga harimu menyenangkan dan produktif!</p>
  </div>

  <!-- Peserta -->
  <div class="bg-gray-100 p-6 rounded-lg shadow mb-6">
    <h3 class="text-lg md:text-xl font-bold mb-4">
      Jumlah Peserta Intechfest 2025 <span class="font-normal">(Sudah Tervalidasi)</span>
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Design Challenge -->
      <div class="bg-[#50C4D3] p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="DC" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-2xl font-bold">{{ $jumlahDC ?? 0 }} Peserta</div>
          <div class="font-base italic text-base md:text-lg">Design Challenge</div>
        </div>
      </div>

      <!-- Web Design Competition -->
      <div class="bg-[#50C4D3] p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="WDC" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-2xl font-bold">{{ $jumlahWDC ?? 0 }} Peserta</div>
          <div class="font-base italic text-base md:text-lg">Web Design Competition</div>
        </div>
      </div>

      <!-- Capture The Flag -->
      <div class="bg-[#50C4D3] p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="CTF" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-2xl font-bold">{{ $jumlahCTF ?? 0 }} Tim</div>
          <div class="font-base italic text-base md:text-lg">Capture The Flag</div>
        </div>
      </div>

      <!-- Seminar ChillTalks -->
      <div class="bg-[#50C4D3] p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/ct-vector.svg') }}" alt="ChillTalks" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-2xl font-bold">
            Offline: {{ $jumlahCTOffline }} Peserta &nbsp;|&nbsp;
            Online: {{ $jumlahCTOnline }} Peserta
          </div>
          <div class="font-base italic text-base md:text-lg">Seminar ChillTalks</div>
        </div>
      </div>
    </div>
  </div>

</main>

@endsection
