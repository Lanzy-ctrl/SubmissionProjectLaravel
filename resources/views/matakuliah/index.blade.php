<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Matakuliah</title>
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('matakuliah.create') }}">Tambah Matakuliah Baru</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $matakuliah->kode_matakuliah }}</td>
                    <td>{{ $matakuliah->nama_matakuliah }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data mata kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>