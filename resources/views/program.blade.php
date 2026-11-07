@extends('layouts.app')

@section('title', 'Program')

@section('content')
    <section class="max-w-5xl mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-10">Program Belajar</h1>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-xl mb-2">Bimbel SD</h3>
                <p class="mb-4">Matematika, Bahasa Indonesia, dan IPA dasar untuk kelas 1-6.</p>
                <p class="text-blue-600 font-bold">Rp 150.000 / bulan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-xl mb-2">Bimbel SMP</h3>
                <p class="mb-4">Matematika, IPA, dan Bahasa Inggris untuk kelas 7-9.</p>
                <p class="text-blue-600 font-bold">Rp 200.000 / bulan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-xl mb-2">Bimbel SMA</h3>
                <p class="mb-4">Persiapan ujian dan UTBK untuk kelas 10-12.</p>
                <p class="text-blue-600 font-bold">Rp 250.000 / bulan</p>
            </div>
        </div>
    </section>
@endsection