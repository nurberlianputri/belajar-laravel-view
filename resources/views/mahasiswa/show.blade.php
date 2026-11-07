@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <section class="max-w-xl mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-8">Detail Mahasiswa</h1>

        <div class="bg-white rounded-lg shadow p-6">
            <dl class="grid grid-cols-3 gap-y-3 mb-6">
                <dt class="font-semibold">NIM</dt>     <dd class="col-span-2">{{ $mahasiswa->nim }}</dd>
                <dt class="font-semibold">Nama</dt>    <dd class="col-span-2">{{ $mahasiswa->nama }}</dd>
                <dt class="font-semibold">Email</dt>   <dd class="col-span-2">{{ $mahasiswa->email }}</dd>
                <dt class="font-semibold">Jurusan</dt> <dd class="col-span-2">{{ $mahasiswa->jurusan }}</dd>
            </dl>

            <div class="flex gap-2">
                <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                   class="bg-yellow-500 text-white px-5 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
                <a href="{{ route('mahasiswa.index') }}" class="px-5 py-2 rounded-lg border hover:bg-gray-100">Kembali</a>
            </div>
        </div>
    </section>
@endsection
