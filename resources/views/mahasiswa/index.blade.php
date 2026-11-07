@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')
    <section class="max-w-5xl mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-8">{{ $judul }}</h1>

        @if (session('success'))
            <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-800 px-4 py-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-4">
            <form action="{{ route('mahasiswa.index') }}" method="GET" class="flex gap-2">
                <input type="text" name="q" value="{{ request('q') }}"
                       placeholder="Cari NIM, nama, email, jurusan..."
                       class="border rounded-lg px-3 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Cari</button>
                @if (request('q'))
                    <a href="{{ route('mahasiswa.index') }}" class="px-4 py-2 rounded-lg border hover:bg-gray-100">Reset</a>
                @endif
            </form>

            <a href="{{ route('mahasiswa.create') }}"
               class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-center">
                + Tambah Mahasiswa
            </a>
        </div>

        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">NIM</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Jurusan</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswas as $mhs)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $mahasiswas->firstItem() + $loop->index }}</td>
                            <td class="px-4 py-3">{{ $mhs->nim }}</td>
                            <td class="px-4 py-3">{{ $mhs->nama }}</td>
                            <td class="px-4 py-3">{{ $mhs->email }}</td>
                            <td class="px-4 py-3">{{ $mhs->jurusan }}</td>
                            <td class="px-4 py-3">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('mahasiswa.show', $mhs) }}"
                                       class="bg-sky-500 text-white px-3 py-1 rounded hover:bg-sky-600 text-sm">Detail</a>
                                    <a href="{{ route('mahasiswa.edit', $mhs) }}"
                                       class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy', $mhs) }}" method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus data {{ $mhs->nama }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-8 text-center text-gray-500">Belum ada data mahasiswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $mahasiswas->links() }}
        </div>
    </section>
@endsection
