<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    private array $messages = [
        'nim.required'     => 'NIM wajib diisi.',
        'nim.unique'       => 'NIM sudah terdaftar.',
        'nama.required'    => 'Nama wajib diisi.',
        'email.required'   => 'Email wajib diisi.',
        'email.email'      => 'Format email tidak valid.',
        'email.unique'     => 'Email sudah terdaftar.',
        'jurusan.required' => 'Jurusan wajib diisi.',
    ];

    // READ: daftar semua mahasiswa (+ pencarian)
    public function index(Request $request)
    {
        $mahasiswas = Mahasiswa::query()
            ->when($request->q, function ($query, $q) {
                $query->where(function ($sub) use ($q) {
                    $sub->where('nim', 'like', "%{$q}%")
                        ->orWhere('nama', 'like', "%{$q}%")
                        ->orWhere('email', 'like', "%{$q}%")
                        ->orWhere('jurusan', 'like', "%{$q}%");
                });
            })
            ->orderBy('nim')
            ->paginate(10)
            ->withQueryString();

        return view('mahasiswa.index', [
            'judul'      => 'Daftar Mahasiswa',
            'mahasiswas' => $mahasiswas,
        ]);
    }

    // CREATE: tampilkan form tambah
    public function create()
    {
        return view('mahasiswa.create');
    }

    // CREATE: simpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim'     => ['required', 'string', 'max:20', 'unique:mahasiswas,nim'],
            'nama'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255', 'unique:mahasiswas,email'],
            'jurusan' => ['required', 'string', 'max:255'],
        ], $this->messages);

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    // READ: detail satu mahasiswa
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    // UPDATE: tampilkan form edit
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // UPDATE: simpan perubahan
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim'     => ['required', 'string', 'max:20', Rule::unique('mahasiswas', 'nim')->ignore($mahasiswa->id)],
            'nama'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255', Rule::unique('mahasiswas', 'email')->ignore($mahasiswa->id)],
            'jurusan' => ['required', 'string', 'max:255'],
        ], $this->messages);

        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    // DELETE: hapus data
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}