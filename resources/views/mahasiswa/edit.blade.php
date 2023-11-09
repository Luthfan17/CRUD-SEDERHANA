<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Form edit Data Mahasiswa
        </h1>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>

        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">error</h4>

            @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
            @endforeach
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('mahasiswa.update' , $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{ $mahasiswa->nim }}" id="nim">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">JURUSAN</label>
                        <input type="text" class="form-control" name="jurusan" value="{{ $mahasiswa->jurusan }}" id="jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>