<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEMPOLITA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3" >
        <h1 class="text-center mb-3">SEMPOLITA| Ubah Data Pasien</h1>
            <div class="card">
                <div class="card-body">
                    <form action="/dataPasien/{{ $data_pasien->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" value="{{ $data_pasien->nama }}" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="{{ $data_pasien->alamat }}" name="alamat" rows="3"></input>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Berat Badan</label>
                            <input type="text" class="form-control" id="bb" value="{{ $data_pasien->bb }}" name="bb" >
                        </div>  
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tinggi Badan</label>
                            <input type="text" class="form-control" id="tb" value="{{ $data_pasien->tb }}" name="tb" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tekanan Darah</label>
                            <input type="text" class="form-control" id="td" value="{{ $data_pasien->td }}" name="td" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Detak Jantung</label>
                            <input type="text" class="form-control" id="dpm" value="{{ $data_pasien->dpm }}" name="dpm">
                        </div>
                        <button type="submit" class="btn btn-primary float-end btn-lg" ">EDIT</button>
                    </form>
                </div>
            </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>