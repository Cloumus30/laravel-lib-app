<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penerbits = [
            [
                "nama"=>"Elex Media Komputindo",
                "alamat" => "Gedung Kompas-Gramedia Lantai 2, Jl. Palmerah Barat No. 29 – 32, Gelora, Tanah Abang, RT.1/RW.2, Gelora, Kota Jakarta Pusat, Daerah Khusus Ibu kota Jakarta 10270",
                "telepon" => "(021) 53650110",
                "email" => "publishing@elex.media"
            ],
            [
                "nama"=>"Andi Publisher",
                "alamat" => "Jl. Beo 38-40, Demangan, Yogyakarta 55281",
                "telepon" => "0274-561881",
                "email" => "pemasaran@andipublisher.com"
            ],
            [
                "nama"=>"Erlangga",
                "alamat" => "Jl. H. Baping Raya No. 100 Ciracas Jakarta Timur 13740",
                "telepon" => "(021) 871 7006",
                "email" => "webmaster@erlangga.co.id"
            ],
        ];

        foreach ($penerbits as $penerbit) {
            Penerbit::create($penerbit);
        }
    }
}
