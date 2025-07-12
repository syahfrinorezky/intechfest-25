@extends('panitia.main')

@section('title', 'Dashboard Panitia')

@section('content')

<main class="p-4 flex flex-col gap-8 md:ml-64 h-auto pt-20">

  {{-- <!-- Sambutan -->
  <div class="p-4 mb-4 rounded-lg text-white bg-gradient-to-r from-green-600 to-green-700 shadow-md">
    <h3 class="text-lg md:text-xl font-bold flex items-center gap-2">
      <img src="{{ asset('images/logo/ivydboard.png') }}" alt="Maskot" class="h-10 md:h-12 transform -translate-y-1">
      Selamat Datang, {{ auth()->user()->name }}!
    </h3>
    <p class="text-m italic mt-1">Semoga harimu menyenangkan dan produktif!</p>
  </div> --}}

  
  
  {{-- sambutan yang baru (butuh saran kalo ada) --}}
  <div class="p-2 flex flex-col sm:flex-row items-center sm:justify-between sm:border-b sm:border-gray-200">
    <div class="py-2 flex items-center gap-1 border-b border-gray-200 sm:border-none">
      <img src="{{ asset('images/logo/ivydboard.png') }}" alt="Maskot" class="h-10 md:h-12 transform -translate-y-1">
      <div class="flex flex-col">
        <h3 class="text-base font-medium text-gray-800">Selamat Datang, <span class="font-bold text-primary-darkblue">{{ auth()->user()->name }}</span>!</h3>
        <p class="text-xs italic mt-1">Semoga harimu menyenangkan dan produktif!</p>
      </div>
    </div>
    <span class="flex p-2 text-sm text-center text-gray-600 sm:border sm:border-gray-200 sm:rounded-lg">{{ $hariIni }}</span>
  </div>

  <div class="flex flex-col gap-5 rounded-lg shadow-shadow-gray-300 sm:p-4">
    <h1 class="flex items-center font-bold text-gray-800"><i class="fas fa-user text-lg text-green-500 mr-2"></i>Total Peserta Resmi</h1>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
      {{-- DC --}}
      <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahSemuaDC['lolos'] ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      {{-- WDC --}}
      <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="logo wdc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBWDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahSemuaWDC['lolos'] ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      {{-- CTF --}}
      <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="logo ctf" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBCTF</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahSemuaCTF['lolos'] ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ct-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">ChillTalks</h2>
          <div class="flex justify-center gap-2">
            <span>
              <h3 class="text-center font-bold text-lg sm:text-4xl">{{ $jumlahCTOnline ?? 0 }}</h3>
              <p class="text-center text-sm">Online</p>
            </span>
            <span>
              <h3 class="text-center font-bold text-lg sm:text-4xl">{{ $jumlahCTOffline ?? 0 }}</h3>
              <p class="text-center text-sm">Offline</p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="flex flex-col gap-5 rounded-lg shadow-shadow-gray-300 sm:p-4">
    <h1 class="flex items-center font-bold text-gray-800"><i class="fas fa-clock text-lg text-yellow-300 mr-2"></i>Administrasi Belum Tervalidasi</h1>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
      {{-- DC --}}
      <div class="p-3 flex flex-col bg-yellow-200/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahDC_belumvalid ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      {{-- WDC --}}
      <div class="p-3 flex flex-col bg-yellow-200/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="logo wdc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBWDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahWDC_belumvalid ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      {{-- CTF --}}
      <div class="p-3 flex flex-col bg-yellow-200/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="logo ctf" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBCTF</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahCTF_belumvalid ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="flex flex-col gap-5 rounded-lg shadow-shadow-gray-300 sm:p-4">
    <h1 class="flex items-center font-bold text-gray-800"><i class="fas fa-circle-check text-lg text-green-500 mr-2"></i>Administrasi Sudah Tervalidasi</h1>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
      {{-- DC --}}
      {{-- <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahDC ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div> --}}

      {{-- WDC --}}
      {{-- <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="logo wdc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBWDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahWDC ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div> --}}

      {{-- CTF --}}
      {{-- <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="logo ctf" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBCTF</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $jumlahCTF ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="flex flex-col gap-5 rounded-lg shadow-shadow-gray-300 sm:p-4">
    <h1 class="flex items-center font-bold text-gray-800"><i class="fas fa-clock text-lg text-yellow-300 mr-2"></i>Transaksi Belum Tervalidasi</h1>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
      {{-- DC --}}
      <div class="p-3 flex flex-col bg-yellow-200/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $transaksiDC_belumvalid ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      {{-- WDC --}}
      <div class="p-3 flex flex-col bg-yellow-200/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="logo wdc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBWDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $transaksiWDC_belumvalid ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      {{-- CTF --}}
      <div class="p-3 flex flex-col bg-yellow-200/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="logo ctf" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBCTF</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $transaksiCTF_belumvalid ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div>

      {{-- CT --}}
      <div class="p-3 flex flex-col bg-yellow-200/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ct-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">ChillTalks</h2>
          <div class="flex justify-center gap-2">
            <span>
              <h3 class="text-center font-bold text-lg sm:text-4xl">{{ $jumlahCT_belumvalid ?? 0 }}</h3>
              <p class="text-center text-sm">Online</p>
            </span>
            <span>
              <h3 class="text-center font-bold text-lg sm:text-4xl">{{ $jumlahCT_offline_belumvalid ?? 0 }}</h3>
              <p class="text-center text-sm">Offline</p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="flex flex-col gap-5 rounded-lg shadow-shadow-gray-300 sm:p-4">
    <h1 class="flex items-center font-bold text-gray-800"><i class="fas fa-circle-check text-lg text-green-500 mr-2"></i>Transaksi Sudah Tervalidasi</h1>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2"> --}}
      {{-- DC --}}
      {{-- <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $transaksiDC ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div> --}}

      {{-- WDC --}}
      {{-- <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="logo wdc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBWDC</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $transaksiWDC ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div> --}}

      {{-- CTF --}}
      {{-- <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="logo ctf" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">PNBCTF</h2>
          <span>
            <h3 class="text-center font-bold text-4xl">{{ $transaksiCTF ?? 0 }}</h3>
            <p class="text-center text-sm">Peserta</p>
          </span>
        </div>
      </div> --}}

      {{-- CT --}}
      {{-- <div class="p-3 flex flex-col bg-green-500/20 text-gray-800 shadow-lg shadow-gray-300 border border-gray-300 rounded-lg relative overflow-hidden">
        <img src="{{ asset('images/logo/ct-vector.svg') }}" alt="logo dc" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 opacity-20 -z-0">
        
        <div class="flex flex-col gap-3 w-full z-10">
          <h2 class="font-bold text-sm text-center">ChillTalks</h2>
          <div class="flex justify-center gap-2">
            <span>
              <h3 class="text-center font-bold text-lg sm:text-4xl">{{ $jumlahCTOnline ?? 0 }}</h3>
              <p class="text-center text-sm">Online</p>
            </span>
            <span>
              <h3 class="text-center font-bold text-lg sm:text-4xl">{{ $jumlahCTOffline ?? 0 }}</h3>
              <p class="text-center text-sm">Offline</p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- Jumlah Peserta (yang BELUM TERVALIDASI cuy!)-->
  {{-- <div class="bg-gray-100 p-6 rounded-lg shadow mb-6">
    <h3 class="text-lg md:text-xl font-bold mb-4">
      Jumlah Peserta IntechFest 2025 <span class="font-normal">(Belum Tervalidasi)</span>
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Design Challenge -->
      <div class="bg-primary-darkblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="DC" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-lg font-bold">{{ $jumlahDC_belumvalid ?? 0 }} Peserta</div>
          <div class="font-base italic text-base md:text-lg">Design Challenge</div>
        </div>
      </div>

      <!-- Web Design Competition -->
      <div class="bg-primary-darkblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="WDC" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-lg font-bold">{{ $jumlahWDC_belumvalid ?? 0 }} Peserta</div>
          <div class="font-base italic text-base md:text-lg">Web Design Competition</div>
        </div>
      </div>

      <!-- Capture The Flag -->
      <div class="bg-primary-darkblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="CTF" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-lg font-bold">{{ $jumlahCTF_belumvalid ?? 0 }} Tim</div>
          <div class="font-base italic text-base md:text-lg">Capture The Flag</div>
        </div>
      </div>

      <!-- Seminar ChillTalks -->
      <div class="bg-primary-darkblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/ct-vector.svg') }}" alt="ChillTalks" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-xl font-bold leading-snug">
            Offline: {{ $jumlahCTOffline_belumvalid }} Peserta <br>
            Online: {{ $jumlahCTOnline_belumvalid }} Peserta
          </div>
          <div class="italic text-base md:text-lg">Seminar ChillTalks</div>
        </div>
      </div>
      <!-- Section seminar lese -->
    </div>
  </div> --}}


  {{-- <!-- Jumlah Peserta (hanya yang SUDAH VALID cuy!)-->
  <div class="bg-gray-100 p-6 rounded-lg shadow mb-6">
    <h3 class="text-lg md:text-xl font-bold mb-4">
      Jumlah Peserta IntechFest 2025 <span class="font-normal">(Sudah Valid)</span>
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Design Challenge -->
      <div class="bg-primary-lightblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/dc-vector.svg') }}" alt="DC" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-lg font-bold">{{ $jumlahDC ?? 0 }} Peserta</div>
          <div class="font-base italic text-base md:text-lg">Design Challenge</div>
        </div>
      </div>

      <!-- Web Design Competition -->
      <div class="bg-primary-lightblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/wdc-vector.svg') }}" alt="WDC" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-lg font-bold">{{ $jumlahWDC ?? 0 }} Peserta</div>
          <div class="font-base italic text-base md:text-lg">Web Design Competition</div>
        </div>
      </div>

      <!-- Capture The Flag -->
      <div class="bg-primary-lightblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/ctf-vector.svg') }}" alt="CTF" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-lg font-bold">{{ $jumlahCTF ?? 0 }} Tim</div>
          <div class="font-base italic text-base md:text-lg">Capture The Flag</div>
        </div>
      </div>

      <!-- Seminar ChillTalks -->
      <div class="bg-primary-lightblue p-4 rounded-xl text-white flex items-center gap-4 h-28">
        <div class="bg-white p-2 rounded-full">
          <img src="{{ asset('images/logo/ct-vector.svg') }}" alt="ChillTalks" class="w-[30px] h-[30px]">
        </div>
        <div>
          <div class="text-xl md:text-xl font-bold leading-snug">
            Offline: {{ $jumlahCTOffline }} Peserta <br>
            Online: {{ $jumlahCTOnline }} Peserta
          </div>
          <div class="italic text-base md:text-lg">Seminar ChillTalks</div>
        </div>
      </div>
      <!-- Section seminar lese -->
    </div>
  </div> --}}
</main>

@endsection
