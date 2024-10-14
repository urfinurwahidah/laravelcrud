<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class='text-center mb-4'>Data Pegawai</h1>
    
    <div class="container">
        <a href="/tambahpegawai" class="btn btn-success">Tambah +</a>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                 </div>
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $no = 1;    
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++}}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>0{{ $row->notelpon }}</td>
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table> 
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>