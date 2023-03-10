<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>|SEMPOLITA|</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5" >
        <h1 class="text-center mb-5">SEMPOLITA| Daftar Pasien</h1>
        <a href="/home" class="btn btn-primary mb-5">Kembali Ke Dashboard</a>
            <div class="card">
                <div class="card-body">
                    
                        <table class="table">
                            <thead>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Tekanan Darah</th>
                                <th>Detak Jantung</th>
                                <th>AKSI</th>
                            </thead>
                            
                            <tbody>
                                @foreach ($data_pasien as $id => $hasil )
                                <tr>
                                    <td>{{ $hasil->id }}</td>
                                    <td>{{ $hasil->nama }}</td>
                                    <td>{{ $hasil->alamat }}</td>
                                    <td>{{ $hasil->bb }}</td>
                                    <td>{{ $hasil->tb }}</td>
                                    <td>{{ $hasil->td }}</td>
                                    <td>{{ $hasil->dpm }}</td>
                                    <td>
                                        <a href="/dataPasien/{{ $hasil->id }}/edit" class="btn btn-success btn-sm">EDIT</a>
                                        <td>
                                            <form action="/dataPasien/{{ $hasil->id }}", method="POST">
                                                @csrf
                                                @method("DELETE")
                                            <button class="btn btn-danger btn-sm">HAPUS</button>
                                            </form>
                                        </td>                             
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

