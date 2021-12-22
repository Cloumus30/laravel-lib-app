<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'nama' => 'naruto',
            'tahun' => '2000',
            'jumlah_hal' => 20,
            'foto'=>'img',
            'berat'=>'200 gram',
            'isbn' => '0291-2031-2asd-',
            'link_beli'=>'www.google.com',
            'deskripsi'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus totam, laudantium iusto obcaecati libero nulla quae dignissimos recusandae. Commodi ad natus, vero reprehenderit nemo perferendis, quia soluta consequatur tenetur numquam voluptatem quos quisquam ab error. Facere impedit fugit ea distinctio at exercitationem perferendis pariatur odit cumque quisquam, minus, deserunt asperiores, quas porro cum sapiente maiores rem vitae saepe. Amet recusandae magnam ex nihil et quam quaerat pariatur quis quod reiciendis, itaque corrupti ducimus fugit earum officia excepturi voluptatem perspiciatis iusto labore dolor ullam soluta non. Sint quos facilis assumenda cum tenetur, ullam nam, veniam dicta cumque tempora, eius eos totam.',
            'penulis_id'=>2,
            'kategori_id'=>1,
            'penerbit_id'=>2,
            'librarian_id'=>1,
        ]);
    }
}
