@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')
    <section class="max-w-5xl mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-8">{{ $judul }}</h1>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">NIM</th>
                        <th class="px-4 py-3">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                        <tr class="border-b">
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $mhs['nama'] }}</td>
                            <td class="px-4 py-3">{{ $mhs['nim'] }}</td>
                            <td class="px-4 py-3">{{ $mhs['jurusan'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection