<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPasien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_pasien=[
            [
                'nama'=>'Dito Ardi Pratama',
                'alamat'=>'Jl. Ir. H. Juanda',
                'bb'=>'105',
                'tb'=>'175',
                'td'=>'120/80',
                'dpm'=>'90',
            ],
            [
                'nama'=>'Dhimas Afri Setiawan',
                'alamat'=>'Wlahar Adipala',
                'bb'=>'60',
                'tb'=>'170',
                'td'=>'120/80',
                'dpm'=>'90',
            ],
            [
                'nama'=>'Rifky Pramudya',
                'alamat'=>'Jl. Duwet',
                'bb'=>'60',
                'tb'=>'170',
                'td'=>'120/80',
                'dpm'=>'90',
            ],
            [
                'nama'=>'Fajri Ikmal Ghozali',
                'alamat'=>'Jl. Protokol',
                'bb'=>'60',
                'tb'=>'170',
                'td'=>'120/80',
                'dpm'=>'90',
            ],
            [
                'nama'=>'Willy Devin Aufa Amanullah',
                'alamat'=>'Jeruk Legi',
                'bb'=>'60',
                'tb'=>'170',
                'td'=>'120/80',
                'dpm'=>'90',
            ],
            [
                'nama'=>'Galang Wijonarko',
                'alamat'=>'Jl.Singkep',
                'bb'=>'60',
                'tb'=>'170',
                'td'=>'120/80',
                'dpm'=>'90',
            ] 
        ];

        foreach($data_pasien as $key => $value){
            Pasien::create($value);
        }
    }
}
