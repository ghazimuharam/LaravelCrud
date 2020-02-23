@extends('layout.main')
@section('title', 'Daftar Mahasiswa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @foreach ($students as $student)
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $student->nama }}
                            <a href="/students/{{ $student->id }}" class="badge badge-info">Detail</a>
                        </li>
                    </ul>
                @endforeach


            </div>
        </div>
    </div>
@endsection
