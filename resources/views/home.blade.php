@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="max-w-5xl mx-auto px-4 py-20 text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Belajar Jadi Lebih Mudah</h1>
        <p class="text-lg mb-8">Bimbingan belajar untuk SD, SMP, dan SMA dengan tutor berpengalaman.</p>
        <a href="/program" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Lihat Program
        </a>
    </section>

    <section class="max-w-5xl mx-auto px-4 pb-20 grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-2">Tutor Berpengalaman</h3>
            <p>Dibimbing langsung oleh pengajar yang paham materi.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-2">Kelas Kecil</h3>
            <p>Maksimal 10 siswa per kelas agar belajar lebih fokus.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-2">Jadwal Fleksibel</h3>
            <p>Pilih jadwal belajar yang sesuai dengan waktu kamu.</p>
        </div>
    </section>
@endsection