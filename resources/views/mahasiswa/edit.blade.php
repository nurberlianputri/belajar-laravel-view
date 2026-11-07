@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <section class="max-w-xl mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-8">Edit Mahasiswa</h1>

        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
                @csrf
                @method('PUT')
                @include('mahasiswa._form', ['submit' => 'Perbarui'])
            </form>
        </div>
    </section>
@endsection
