@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <section class="max-w-xl mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-8">Tambah Mahasiswa</h1>

        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                @include('mahasiswa._form', ['submit' => 'Simpan'])
            </form>
        </div>
    </section>
@endsection
