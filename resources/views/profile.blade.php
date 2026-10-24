
@extends('layouts.app')

@section('title', 'Profil')

@section('content')

@php
  $nama = 'Fitriani';

  $data = [
    ['label' => 'Nama',    'isi' => 'Fitriani'],
    ['label' => 'NIM',     'isi' => '250210500005'],
    ['label' => 'Program Studi', 'isi' => 'Teknik Komputer'],
    ['label' => 'Kelas',  'isi' => 'Tekom D 25'],
  ];

  $bagian = [
    ['judul' => 'Home',    'ket' => 'Berisi pengenalan dan materi dasar Laravel View.'],
    ['judul' => 'Profil',  'ket' => 'Berisi perkenalan singkat.'],
    ['judul' => 'Contact', 'ket' => 'Berisi cara untuk berbagi materi.'],
  ];

  $materi = ['Layouting pada Blade Laravel', 'template inhertance', 'Layouting', '@include', '@yield', '@section', '@endsection'];
@endphp

<!-- Bagian atas -->
<section class="relative isolate overflow-hidden bg-gray-900 pb-20 pt-32 text-center sm:pt-40">

  <div aria-hidden="true" class="absolute -bottom-32 left-1/4 -z-10 size-[28rem] rounded-full bg-purple-700/30 blur-3xl"></div>
  <div aria-hidden="true" class="absolute -right-20 -top-20 -z-10 size-96 rounded-full bg-indigo-500/10 blur-3xl"></div>

  <div class="mx-auto max-w-3xl px-6 lg:px-8">
    <span class="mx-auto grid size-24 place-items-center rounded-full bg-indigo-500/20 text-4xl font-bold text-indigo-300 ring-8 ring-white/10">
      {{ substr($nama, 0, 1) }}
    </span>
    <p class="mt-6 text-sm font-semibold uppercase tracking-wider text-indigo-300">Profil</p>
    <h1 class="mt-2 text-4xl font-semibold tracking-tight text-white sm:text-6xl">{{ $nama }}</h1>
    <p class="mx-auto mt-6 max-w-xl text-lg text-gray-300">
      Bersama belajar laravel view
    </p>
  </div>
</section>

<!-- Isi profil -->
<section class="relative isolate overflow-hidden border-t border-white/10 bg-linear-to-br from-gray-900 via-indigo-950 to-indigo-950 py-20">

  <div aria-hidden="true" class="absolute -bottom-32 right-1/4 -z-10 size-[28rem] rounded-full bg-purple-700/30 blur-3xl"></div>

  <div class="mx-auto max-w-5xl px-6 lg:px-8">

    <!-- Data diri -->
    <h2 class="text-2xl font-semibold text-white">Data Diri</h2>
    <div class="mt-6 grid gap-4 sm:grid-cols-2">
      @foreach ($data as $item)
        <div class="rounded-2xl bg-white/10 p-5 ring-1 ring-white/10 transition hover:-translate-y-1 hover:ring-indigo-400/50">
          <p class="text-xs font-semibold uppercase tracking-wider text-indigo-300">{{ $item['label'] }}</p>
          <p class="mt-1 font-semibold text-white">{{ $item['isi'] }}</p>
        </div>
      @endforeach
    </div>

    <!-- Tiga bagian website -->
    <h2 class="mt-16 text-2xl font-semibold text-white">Tentang Website Ini</h2>
    <p class="mt-3 max-w-2xl text-gray-300">
      Website ini dibuat agar bisa memahami materi Laravel View. Isinya dibagi menjadi tiga bagian.
    </p>

    <div class="mt-6 grid gap-4 sm:grid-cols-3">
      @foreach ($bagian as $i => $item)
        <div class="rounded-2xl bg-white/10 p-5 ring-1 ring-white/10">
          <span class="grid size-9 place-items-center rounded-lg bg-indigo-500/20 text-sm font-semibold text-indigo-300 ring-1 ring-indigo-400/30">
            {{ $i + 1 }}
          </span>
          <h3 class="mt-4 font-semibold text-white">{{ $item['judul'] }}</h3>
          <p class="mt-1 text-sm text-gray-400">{{ $item['ket'] }}</p>
        </div>
      @endforeach
    </div>

    <!-- Yang dipelajari -->
    <h2 class="mt-16 text-2xl font-semibold text-white">Yang Dipelajari</h2>
    <div class="mt-6 flex flex-wrap gap-2">
      @foreach ($materi as $item)
        <span class="rounded-full bg-white/10 px-4 py-1.5 text-sm font-medium text-indigo-200 ring-1 ring-white/10">
          {{ $item }}
        </span>
      @endforeach
    </div>

  </div>
</section>

@endsection