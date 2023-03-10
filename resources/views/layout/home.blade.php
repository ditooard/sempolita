@extends('layout.main')

@section('judul')
SEMPOLITA | Halaman Home
@endsection

@section('isi')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat Datang di e-Posyandu SEMPOLITA</h3>

        <div class="card-tools">
            
          </div>
        </div>
        <div class="card-body">
          <div class="alert alert-success">
            Halo | {{ $user->name }} | ,  Selamat Datang  di SEMPOLITA
          </div>
          |SEMPOLITA| merupakan Sistem Monitoring Posyandu Lansia dan Balita berbasis Website yang mudah digunakan dan ramah bagi segala usia 
        </br>
        </br>
          Posyandu elektrorik atau disingkat e-Posyandu adalah salah satu solusi program revitalisasi posyandu. Basis penggunaanya adalah menggunakan website. Aplikasi e-Posyandu diharapkan mampu digunakan secara optimal sehingga dapat mengatasi permasalahan yang dihadapi oleh posyandu dengan sistem konvensional.
        </br>
        </br>
        --- Kegiatan SEMPOLITA --- </br> 
        *Kesehatan Ibu Dan Anak.</br>
        *Keluarga Berencana.</br>
        *Imunisasi.</br>
        *Gizi.</br>
        *Pencegahan dan Penanggulangan Diare.</br>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
@endsection

 

