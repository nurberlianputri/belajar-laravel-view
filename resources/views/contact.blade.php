@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section class="max-w-xl mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-4">Hubungi Kami</h1>
        <p class="text-center mb-8">Ada pertanyaan atau ingin mendaftar? Isi form di bawah ini.</p>

        <div class="bg-white p-6 rounded-lg shadow space-y-4">
            <div>
                <label class="block font-medium mb-1">Nama</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Nama lengkap">
            </div>
            <div>
                <label class="block font-medium mb-1">Nomor WhatsApp</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="08xxxxxxxxxx">
            </div>
            <div>
                <label class="block font-medium mb-1">Pesan</label>
                <textarea rows="4" class="w-full border rounded px-3 py-2" placeholder="Tulis pesan kamu"></textarea>
            </div>
            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Kirim
            </button>
        </div>

        <div class="text-center mt-8">
            <p>Alamat: Jl. Mannuruki Raya, Makassar</p>
            <p>WhatsApp: 081947885476</p>
        </div>
    </section>
@endsection