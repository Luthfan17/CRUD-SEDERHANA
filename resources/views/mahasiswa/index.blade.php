<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <td>NO</td>
                        <td>NIM</td>
                        <td>NAMA</td>
                        <td>JURUSAN</td>
                        <td>AKSI</td>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $no => $hasil)
                            <tr>
                                <th>{{ $no+1 }}</th>
                                <td>{{ $hasil->nim }}</td>
                                <td>{{ $hasil->nama }}</td>
                                <td>{{ $hasil->jurusan}}</td>
                                <td>
                                    <form action="{{ route('mahasiswa.destroy', $hasil->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('mahasiswa.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>