{{-- menghubungkan file main --}}
@extends('panitia.main')

{{-- judul halaman disini --}}
@section('title', 'Dashboard Panitia')

@section('content')

<main class="p-4 md:ml-64 h-auto pt-20">

    <div class="p-4 mb-4 text-white rounded-lg bg-green-500" role="alert">
      <h3 class="text-lg font-medium italic">Welcome, {{auth()->user()->name}}</h3>
    </div>
  
</main>

@endsection