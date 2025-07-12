{{-- menghubungkan file main --}}
@extends('peserta.main')

{{-- judul halaman disini --}}
@section('title', 'Form ChillTalks')
<link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}">

{{-- membuat content disini --}}
@section('content')
<!-- start content -->
<div class="p-4 sm:ml-64 mt-14">
    <!-- Start block -->
    <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Profil Peserta</h2>
            <p class="mt-1 mb-6 text-sm leading-6 text-gray-600">Silakan lengkapi semua informasi yang diperlukan untuk profil Anda dengan benar</p>
            @if ($errors->any())
            <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            @endif
            
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <ol class="space-y-4 w-full">
                    <li>
                        <div class="w-full p-4 text-blue-700 bg-blue-100 border border-blue-300 rounded-lg dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                            role="alert">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium">1. Bukti Transfer</h3>
                                <i class="fa-solid fa-arrow-right text-xl"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            role="alert">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium">2. Validasi Transaksi</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            role="alert">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium">3. Mendapat Nomor Peserta</h3>
                            </div>
                        </div>
                    </li>
                </ol>

                <form action="{{url("/daftar-ct"."/".$data_peserta->id_peserta)}}" method="POST" enctype="multipart/form-data"
                    class="xl:col-span-2">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_peserta" value="{{ $data_peserta->id_peserta }}">
                    <input type="hidden" name="email" value="{{ $data_peserta->email }}">
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 -mt-2 text-gray-900">Nama
                            Lengkap</label>
                        <div class="my-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-lightblue w-full">
                                <input type="text" name="nama_lengkap" id="username" autocomplete="username"
                                    class=" block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan nama lengkap..." value="{{ $data_peserta->nama_lengkap ? $data_peserta->nama_lengkap : '' }}" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="username"
                            class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                        <div class="my-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-lightblue w-full">
                                <input type="text" name="alamat" id="username" autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan alamat..." value="{{ $data_peserta->alamat ? $data_peserta->alamat : '' }}" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama
                            instansi</label>
                        <div class="my-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-lightblue w-full">
                                <input type="text" name="nama_instansi" id="username" autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan nama instansi..." value="{{ $data_peserta->nama_instansi ? $data_peserta->nama_instansi : '' }}"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nomer
                            Handphone</label>
                        <div class="my-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-lightblue w-full">
                                <input type="text" name="no_hp" id="username" autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan nomer handphone..." value="{{ $data_peserta->no_hp ? $data_peserta->no_hp : '' }}" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Sesi Chilltalks</label>
                        <select name="sesi" id="sesi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            <option hidden class="italic" value="">-- DIPILIH --</option>
                            @if($ct >= 200)
                                <option value="Online">Online | Tersedia</option>
                            @else
                                <option value="Online">Online | Tersedia</option>
                                <option value="Offline">Offline | Tersedia</option>
                            @endif
                        </select>
                    </div>
                    <div class="flex flex-col space-y-2 my-2.5">
                        <h1 class="font-medium text-sm text-gray-900">Rekening Pembayaran</h1>
                        <div class="flex flex-col sm:flex-row gap-y-2 sm:gap-x-5">
                            <div class="flex flex-col gap-y-2">
                                <p class="text-sm text-gray-900">BCA <br> a.n <span class="text-primary-blue font-semibold">NI NYOMAN MITASARI</span></p>
                                <div class="flex gap-x-2">
                                    <input type="text" id="rekening-bca" value="1420920021" readonly
                                        class="border rounded text-center py-2 text-sm bg-gray-200 text-gray-800" />
                                    
                                    <button id="copyBtn-bca"
                                            type="button"
                                            onclick="copyRekening('rekening-bca', 'copyBtn-bca')"
                                            class="bg-primary-lightblue text-white px-3 py-1 rounded hover:bg-primary-blue transition-colors ease-in-out duration-300">
                                        Salin
                                    </button>
                                </div>
                            </div>    
                            <div class="flex flex-col gap-y-2">
                                <p class="text-sm text-gray-900">BRI <br> a.n <span class="text-primary-blue font-semibold uppercase">Ni Wayan Dina Sinta Gusnadi</span></p>
                                <div class="flex gap-x-2">
                                    <input type="text" id="rekening-bri" value="478301022773538" readonly
                                        class="border rounded text-center py-2 text-sm bg-gray-200 text-gray-800" />
                                    
                                    <button id="copyBtn-bri"
                                            type="button"
                                            onclick="copyRekening('rekening-bri', 'copyBtn-bri')"
                                            class="bg-primary-lightblue text-white px-3 py-1 rounded hover:bg-primary-blue transition-colors ease-in-out duration-300">
                                        Salin
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <label for="bank" class="font-medium text-sm text-gray-900">Pilih Bank</label>
                            <select name="bank" id="bank" class="border border-gray-300 hover:border-primary-lightblue focus:border-primary-blue text-gray-900 text-sm rounded-lg cursor-pointer transition-all" required>
                                <option value="" hidden>-- PILIH BANK --</option>
                                <option value="bca">BCA - 1420920021</option>
                                <option value="bri">BRI - 478301022773538</option>
                            </select>
                        </div>
                    </div>
                    <label class="block my-2.5 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                        Bukti Transfer</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" name="foto" type="file" required>
                    <div class="mt-1 mb-5 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Bukti transfer harus bertipe <b>png, jpg, atau jpeg</b>. Dan tidak boleh lebih besar dari 2MB. <b>Harga Pendaftaran ChillTalks dapat di lihat <a href="{{url('/chilltalks-detail')}}" class="font-semibold underline text-primary-lightblue hover:text-primary-blue dark:text-blue-500 transition-all ease-in-out">Disini</a></b></div>
                    <button type="submit"
                        class="text-white font-semibold bg-primary-lightblue hover:bg-primary-blue transition-all ease-in-out focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
                </form>
            </div>
        </div>
    </section>
    <!-- End block -->
</div>
<!-- end content -->

{{-- js buat tombol salin rekening ya --}}
<script>
    function copyRekening(inputId, buttonId) {
        // ambil value dari input field berdasarkan ID
        const rekening = document.getElementById(inputId).value;
        const copyBtn = document.getElementById(buttonId);

        navigator.clipboard.writeText(rekening).then(() => {
            copyBtn.textContent = "Disalin!";
            copyBtn.classList.remove("bg-primary-lightblue");
            copyBtn.classList.add("bg-primary-blue");

            setTimeout(() => {
                copyBtn.textContent = "Salin";
                copyBtn.classList.remove("bg-primary-blue");
                copyBtn.classList.add("bg-primary-lightblue");
            }, 2000);
        }).catch(() => {
            copyBtn.textContent = "Gagal!";
        });
    }
</script>