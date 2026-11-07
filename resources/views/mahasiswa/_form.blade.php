@php
    $fields = [
        'nim'     => ['label' => 'NIM',     'type' => 'text',  'placeholder' => 'Contoh: 250001'],
        'nama'    => ['label' => 'Nama',    'type' => 'text',  'placeholder' => 'Nama lengkap'],
        'email'   => ['label' => 'Email',   'type' => 'email', 'placeholder' => 'nama@email.com'],
        'jurusan' => ['label' => 'Jurusan', 'type' => 'text',  'placeholder' => 'Contoh: Teknik Komputer'],
    ];
@endphp

@foreach ($fields as $name => $f)
    <div class="mb-4">
        <label for="{{ $name }}" class="block font-semibold mb-1">{{ $f['label'] }}</label>
        <input type="{{ $f['type'] }}" id="{{ $name }}" name="{{ $name }}"
               value="{{ old($name, $mahasiswa->$name ?? '') }}"
               placeholder="{{ $f['placeholder'] }}"
               class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 @error($name) border-red-500 @enderror">
        @error($name)
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
@endforeach

<div class="flex gap-2">
    <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
        {{ $submit ?? 'Simpan' }}
    </button>
    <a href="{{ route('mahasiswa.index') }}" class="px-5 py-2 rounded-lg border hover:bg-gray-100">Batal</a>
</div>
