@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

@php
  $tombol = ['Pengenalan Laravel', 'Sistem Routing', 'Blade Template', 'Layouting Blade'];

  $katakunci = [
    ['nama' => 'Laravel', 'ket' => 'Dasar Framework'],
    ['nama' => 'Blade',   'ket' => 'Sistem Template'],
    ['nama' => 'Layout',  'ket' => 'Tata Letak'],
  ];

  $konsep = [
  ['judul' => 'Folder Views',                'ket' => 'Tempat Menyimpan Tampilan',    'ikon' => 'M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9'],
  ['judul' => 'Folder Layouts dan Partials', 'ket' => 'Menyimpan Kerangka dan Potongan', 'ikon' => 'M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z'],
  ['judul' => 'File .blade.php',             'ket' => 'Akhiran Nama File Tampilan',   'ikon' => 'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5'],
  ['judul' => '@extends dan @yield',         'ket' => 'Memakai Layout',               'ikon' => 'M3.75 3.75h16.5v16.5H3.75zM3.75 9h16.5M9 9v11.25'],
  ['judul' => '@include',                    'ket' => 'Memasang Header dan Footer',   'ikon' => 'M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3'],
  ['judul' => '@section dan @endsection',    'ket' => 'Mengisi Bagian Halaman',       'ikon' => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
  ];

  $berkas = [
    ['nama' => 'resources / home.blade.php',    'ket' => 'Halaman Beranda · route /',        'status' => 'Aktif',  'aktif' => true],
    ['nama' => 'resources / profile.blade.php', 'ket' => 'Halaman Profil · route /profile',  'status' => 'Aktif',  'aktif' => true],
    ['nama' => 'resources / contact.blade.php', 'ket' => 'Halaman Kontak · route /contact',  'status' => 'Aktif',  'aktif' => true],
    ['nama' => 'layouts / app.blade.php',       'ket' => 'Kerangka halaman · dipakai semua', 'status' => 'Layout', 'aktif' => false],
  ];
@endphp

<!-- 1. Kartu biru dengan panel di samping -->
<section class="relative isolate overflow-hidden px-6 pb-20 pt-32 lg:px-8">

  <!-- Gradasi pink-lavender di atas -->
  <div aria-hidden="true" class="absolute inset-x-0 top-0 -z-10 h-72 overflow-hidden blur-3xl">
    <div class="absolute left-1/4 top-0 h-56 w-[28rem] rounded-full bg-purple-300/50"></div>
    <div class="absolute right-1/4 top-0 h-56 w-[28rem] rounded-full bg-pink-300/50"></div>
  </div>

  <div class="relative isolate mx-auto max-w-7xl overflow-hidden rounded-3xl bg-gray-900 px-6 pt-16 shadow-2xl sm:px-16 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">

    <!-- Cahaya ungu di bawah kartu -->
    <div aria-hidden="true" class="absolute -bottom-32 left-1/3 -z-10 size-[28rem] rounded-full bg-purple-700/30 blur-3xl"></div>

    <!-- Kiri: judul -->
    <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
      <h4 class="text-6xl font-semibold tracking-tight text-balance text-white sm:text-6xl">
        Satu Layout
        Banyak Halaman
      </h4>
    </div>

    <!-- Kanan: panel tentang Laravel -->
    <div class="relative mt-16 h-80 lg:mt-8 lg:h-[30rem]">
      <div class="absolute left-0 top-0 w-[57rem] max-w-none overflow-hidden rounded-tl-xl bg-gray-800 ring-1 ring-white/10">
        <div class="flex">

          <!-- Sidebar -->
          <div class="w-56 shrink-0 border-r border-white/10 bg-gray-900/60 p-5">
            <p class="text-lg font-semibold text-white">Laravel</p>

            <p class="mt-8 text-xs text-gray-500">Navigasi</p>
            <ul class="mt-3 space-y-3 text-sm text-gray-400">
              <li>Routes</li>
              <li class="font-semibold text-white">Views</li>
              <li>Controllers</li>
              <li>Models</li>
              <li>Migrations</li>
              <li>Settings</li>
            </ul>

            <p class="mt-8 text-xs text-gray-500">Folder utama</p>
            <ul class="mt-3 space-y-3 text-sm text-gray-400">
              <li>resources</li>
              <li>routes</li>
              <li>public</li>
            </ul>
          </div>

          <!-- Isi -->
          <div class="flex-1">
            <div class="border-b border-white/10 p-4">
              <div class="rounded-lg bg-gray-900/60 px-4 py-2 text-sm text-gray-500 ring-1 ring-white/10">
                Cari file view...
              </div>
            </div>

            <div class="p-5">
              <p class="text-sm font-semibold text-white">Semua view</p>

              <ul class="mt-4 divide-y divide-white/10">
                @foreach ($berkas as $item)
                  <li class="flex items-center justify-between py-4">
                    <div>
                      <p class="text-sm text-white">
                        <span class="mr-2 {{ $item['aktif'] ? 'text-green-400' : 'text-gray-500' }}">●</span>{{ $item['nama'] }}
                      </p>
                      <p class="mt-1 text-xs text-gray-500">{{ $item['ket'] }}</p>
                    </div>
                    <span class="rounded-full px-3 py-1 text-xs {{ $item['aktif'] ? 'bg-white/10 text-gray-300' : 'bg-indigo-500 font-semibold text-white' }}">
                      {{ $item['status'] }}
                    </span>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<!-- 2. Hero ungu -->
<section class="bg-linear-to-br from-indigo-950 via-indigo-950 to-gray-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">

    <h1 class="max-w-3xl text-5xl font-semibold tracking-tight text-white sm:text-7xl">
      Mengenal Laravel View
    </h1>

    <p class="mt-8 max-w-3xl text-lg/8 text-gray-300 sm:text-xl/9">
      Laravel View berfungsi untuk mengatur tampilan halaman web. Dengan Blade Template,
      kode tampilan dapat disusun secara rapi dan digunakan kembali agar pengembangan website lebih terstruktur.
    </p>

    <div class="mt-12 flex flex-wrap gap-x-10 gap-y-4">
      @foreach ($tombol as $item)
        <a href="#materi" class="text-base font-semibold text-white transition hover:text-indigo-300">
          {{ $item }} <span aria-hidden="true">&rarr;</span>
        </a>
      @endforeach
    </div>

    <dl class="mt-20 grid grid-cols-2 gap-10 lg:grid-cols-4">
      @foreach ($katakunci as $item)
        <div>
          <dt class="text-4xl font-semibold text-white sm:text-5xl">{{ $item['nama'] }}</dt>
          <dd class="mt-2 text-lg text-gray-300">{{ $item['ket'] }}</dd>
        </div>
      @endforeach
    </dl>

  </div>
</section>

<!-- 3. Konsep Dasar Laravel View -->
<section id="materi" class="relative isolate overflow-hidden border-t border-white/10 bg-linear-to-br from-gray-900 via-indigo-950 to-indigo-950 py-24 sm:py-32">

  <!-- Cahaya ungu lembut -->
  <div aria-hidden="true" class="absolute -bottom-32 right-1/4 -z-10 size-[28rem] rounded-full bg-purple-700/30 blur-3xl"></div>

  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="grid gap-16 lg:grid-cols-3">

      <!-- Kiri -->
      <div>
        <h2 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl">
          Konsep Dasar Laravel View
        </h2>
        <p class="mt-6 text-lg/9 text-gray-300">
          Laravel View memisahkan tampilan dari logika aplikasi, sehingga kode lebih rapi dan mudah dipakai ulang.
        </p>
      </div>

      <!-- Kanan: enam poin -->
      <dl class="grid gap-x-8 gap-y-12 sm:grid-cols-2 lg:col-span-2">
        @foreach ($konsep as $item)
          <div class="flex items-start gap-6">
            <div class="grid size-24 shrink-0 place-items-center rounded-2xl bg-white/10 ring-1 ring-white/10">
              <svg class="size-9 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['ikon'] }}" />
              </svg>
            </div>
            <div class="pt-2">
              <dt class="text-lg font-medium text-white">{{ $item['judul'] }}</dt>
              <dd class="mt-1 text-lg text-indigo-300">{{ $item['ket'] }}</dd>
            </div>
          </div>
        @endforeach
      </dl>

    </div>
  </div>
</section>

@endsection