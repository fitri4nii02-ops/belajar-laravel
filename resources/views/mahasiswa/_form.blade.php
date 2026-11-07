@if ($errors->any())
    <p class="mb-6 rounded-lg bg-red-100 px-4 py-3 text-sm font-medium text-red-800">
        Semua kolom wajib diisi.
    </p>
@endif

<div class="space-y-5">
    <div>
        <label class="block text-sm font-medium text-primary-800">Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama ?? '') }}"
            class="mt-2 w-full rounded-lg border border-primary-200 bg-white px-4 py-2.5 text-primary-900 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
    </div>

    <div>
        <label class="block text-sm font-medium text-primary-800">Kelas</label>
        <input type="text" name="kelas" value="{{ old('kelas', $mahasiswa->kelas ?? '') }}"
            class="mt-2 w-full rounded-lg border border-primary-200 bg-white px-4 py-2.5 text-primary-900 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
    </div>

    <div>
        <label class="block text-sm font-medium text-primary-800">Prodi</label>
        <input type="text" name="prodi" value="{{ old('prodi', $mahasiswa->prodi ?? '') }}"
            class="mt-2 w-full rounded-lg border border-primary-200 bg-white px-4 py-2.5 text-primary-900 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
    </div>
</div>

<div class="mt-8 flex gap-3">
    <button type="submit"
            class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-indigo-500">
        Simpan
    </button>
    <a href="{{ route('mahasiswa.index') }}"
        class="rounded-lg bg-gray-200 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-300">
        Batal
    </a>
</div>