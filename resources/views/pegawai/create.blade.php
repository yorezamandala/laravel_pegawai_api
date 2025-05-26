{{-- <!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Pegawai Baru</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') }}" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Pegawai</button>
    </form>
</div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Data Pegawai</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pegawai.store') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-gray-600 mb-1">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Contoh: Siti Nurhaliza" required>
                </div>

                <div>
                    <label class="block text-gray-600 mb-1">NIP</label>
                    <input type="text" name="nip" value="{{ old('nip') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Contoh: 198209102005041001" required>
                </div>

                <div>
                    <label class="block text-gray-600 mb-1">Jabatan</label>
                    <input type="text" name="jabatan" value="{{ old('jabatan') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Contoh: Pranata Komputer Ahli Pertama" required>
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('pegawai.index') }}" class="text-sm text-gray-600 hover:underline">← Kembali</a>
                    <button type="submit"
                        class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
