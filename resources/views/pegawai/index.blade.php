{{-- <!DOCTYPE html>
<html>

<head>
    <title>List Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
</body>

</html> --}}

@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2>Data Pegawai</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $pegawai)
                    <tr>
                        <td>{{ $pegawai->id }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->nip }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>
                            <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST"
                                style="display:inline-block" onsubmit="return confirm('Yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($pegawais->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center">Data pegawai kosong.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
