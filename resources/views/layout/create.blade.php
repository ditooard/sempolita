<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3" >
        <h1 class="text-center mb-2">SEMPOLITA| Input Data Pasien</h1>
        <a href="/home" class="btn btn-primary mb-2">Kembali Ke Dashboard</a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('dataPasien.store') }} " method="POST">
                        @csrf
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Mohon Inputkan Nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Mohon Inputkan Alamat Anda"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Berat Badan</label>
                            <input type="text" class="form-control" id="bb" name="bb" placeholder="Mohon Inputkan Berat Badan Anda">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tinggi Badan</label>
                            <input type="text" class="form-control" id="tb" name="tb" placeholder="Mohon Inputkan Tinggi Badan Anda">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tekanan Darah</label>
                            <input type="text" class="form-control" id="td" name="td" placeholder="Mohon Inputkan Tekanan Darah Anda">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Detak Jantung</label>
                            <input type="text" class="form-control" id="dpm" name="dpm" placeholder="Mohon Inputkan Detak Jantung Anda">
                        </div>
                        <button type="submit" class="btn btn-primary float-end btn-lg" ">SIMPAN</button>
                    </form>
                </div>
            </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>