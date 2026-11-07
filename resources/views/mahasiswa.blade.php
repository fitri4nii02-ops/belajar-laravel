@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')
<section class="relative z-10 mx-auto max-w-5xl px-6 pb-20 pt-28 lg:px-8">

    <div class="flex items-center justify-between">
        <h1 class="text-3xl font-semibold text-primary-900">{{ $judul }}</h1>
        <a href="{{ route('mahasiswa.create') }}"
            class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500">
            + Tambah Mahasiswa
        </a>
    </div>

    @if (session('sukses'))
        <p class="mt-6 rounded-lg bg-green-100 px-4 py-3 text-sm font-medium text-green-800">
            {{ session('sukses') }}
        </p>
    @endif

    <div class="mt-8 overflow-x-auto rounded-2xl bg-white shadow ring-1 ring-primary-200">
        <table class="w-full border-collapse text-left text-sm">
            <thead class="bg-primary-100 text-xs uppercase tracking-wider text-primary-800">
                <tr>
                    <th class="border-b border-primary-200 px-5 py-3">No</th>
                    <th class="border-b border-primary-200 px-5 py-3">Nama</th>
                    <th class="border-b border-primary-200 px-5 py-3">Kelas</th>
                    <th class="border-b border-primary-200 px-5 py-3">Prodi</th>
                    <th class="border-b border-primary-200 px-5 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-primary-900">
                @forelse ($mahasiswa as $m)
                    <tr class="border-b border-primary-100 hover:bg-primary-50">
                        <td class="px-5 py-4">{{ $loop->iteration }}</td>
                        <td class="px-5 py-4 font-medium">{{ $m->nama }}</td>
                        <td class="px-5 py-4">{{ $m->kelas }}</td>
                        <td class="px-5 py-4">{{ $m->prodi }}</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('mahasiswa.edit', $m) }}"
                                    class="rounded-md bg-amber-500 px-3 py-1.5 text-xs font-semibold text-white hover:bg-amber-400">
                                    Edit
                                </a>

                                <form action="{{ route('mahasiswa.destroy', $m) }}" method="POST"
                                    onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="rounded-md bg-red-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-500">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-5 py-10 text-center text-primary-700">
                            Belum ada data mahasiswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</section>
@endsection