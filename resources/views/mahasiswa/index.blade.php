@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="mx-auto max-w-5xl px-6 py-12">

    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-purple-900">
            Daftar Mahasiswa
        </h1>

        <a href="{{ route('mahasiswa.create') }}"
           class="rounded-lg bg-purple-700 px-5 py-3 font-semibold text-white hover:bg-purple-900">
            + Tambah Mahasiswa
        </a>
    </div>

    @if (session('sukses'))
        <div class="mb-5 rounded-lg bg-green-100 p-4 text-green-800">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="overflow-x-auto rounded-xl bg-white shadow-lg">
        <table class="w-full border-collapse text-left">
            <thead class="bg-purple-700 text-white">
                <tr>
                    <th class="px-5 py-4">No.</th>
                    <th class="px-5 py-4">Nama</th>
                    <th class="px-5 py-4">Kelas</th>
                    <th class="px-5 py-4">Program Studi</th>
                    <th class="px-5 py-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($mahasiswas as $index => $mahasiswa)
                    <tr class="border-b border-gray-200 hover:bg-purple-50">
                        <td class="px-5 py-4">
                            {{ $mahasiswas->firstItem() + $index }}
                        </td>

                        <td class="px-5 py-4">
                            {{ $mahasiswa->nama }}
                        </td>

                        <td class="px-5 py-4">
                            {{ $mahasiswa->kelas }}
                        </td>

                        <td class="px-5 py-4">
                            {{ $mahasiswa->prodi }}
                        </td>

                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center gap-2">

                                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                                   class="rounded-lg bg-amber-500 px-3 py-2 text-white hover:bg-amber-600">
                                    Edit
                                </a>

                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="cursor-pointer rounded-lg bg-red-600 px-3 py-2 text-white hover:bg-red-700">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-5 py-8 text-center text-gray-500">
                            Belum ada data mahasiswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        {{ $mahasiswas->links() }}
    </div>

</div>
@endsection