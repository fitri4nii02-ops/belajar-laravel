@extends('layouts.app')

@section('title', 'Ubah Mahasiswa')

@section('content')
<section class="relative z-10 mx-auto max-w-xl px-6 pb-20 pt-28">

    <h1 class="text-3xl font-semibold text-primary-900">Ubah Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST"
        class="mt-8 rounded-2xl bg-white p-6 shadow ring-1 ring-primary-200">
        @csrf
        @method('PUT')
        @include('mahasiswa._form')
    </form>

</section>
@endsection