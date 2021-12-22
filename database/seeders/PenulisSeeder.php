<?php

namespace Database\Seeders;

use App\Models\Penulis;
use Illuminate\Database\Seeder;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $penulis = [
            [
                "nama"=>"Eiichiro Oda",
                "tgl_lahir" => "1975-01-01",
                "biografi" => "Eiichiro Oda (尾田栄一郎 Oda Ei'ichirō ) adalah seorang mangaka kelahiran 1 Januari 1975 di prefektur Kumamoto.
                Saat Eiichiro Oda kecil, Eiichiro Oda selalu berangan-angan sebagai bajak laut dan ingin menjadi mangaka. Pada umur 17 tahun, Eiichiro Oda mengirimkan karyanya berjudul Wanted dan memenangkan berbagai penghargaan. Pada umur 19 tahun, Eiichiro Oda menjadi asisten Nobuhiro Watsuki dalam pengerjaan Rurouni Kenshin. Bersamaan dengan itu pula, Eiichiro Oda menggambar Romance Dawn yang merupakan bab awal dari One Piece. Pada tahun 1997, One Piece terbit pertama kali di majalah Shonen Jump dan menjadi salah satu manga terpopuler di Jepang. Manga One Piece ini pun menjadi Manga no 1 di Dunia bukan hanya di Jepang .",
                "foto" => "img"
            ],
            [
                "nama"=>"Masashi Kishimoto",
                "tgl_lahir" => "1974-11-08",
                "biografi" => "Masashi Kishimoto (岸本 斉史 Kishimoto Masashi) seorang Mangaka terbaik Jepang Kishimoto mulai mengembangkan bakat menggambarnya sejak duduk di bangku SD. Kishimoto lahir sebagai anak kembar. Kishimoto Dalam Interview, Masashi Kishimoto mengatakan bahwa dia sengaja membuat Teknik Shiki fuujin dari Klan Uzumaki dipelajari dan dipakai oleh minato. Teknik ini sendiri diciptakan oleh Klan Uzumaki dari desa Uzushiogakure yang notabenenya adalah Klan yang punya kemampuan dalam jutsu penyegelan terkuat termasuk Shiki fuujin ini. Kishimoto juga mengatakan jutsu ini sudah tertulis di gulungan segel milik klan Uzumaki, Mereka juga sudah melakukan kontrak dengan Shinigami. Teknik ini memiliki sebuah topeng yang bisa di pakai oleh pengguna. topeng ini sendiri berada di kuil Uzushiogakure dan kuil ini merupakan kuil puak Uzumaki. Dalam interview ini, Masashi Kishimoto juga mengatakan bahwa Tobirama Senju bukanlah pencipta teknik Shiki fuujin. Kishimoto menganggap sebagian fans Naruto telah salah paham. Dia juga salah karena tidak menjelaskan lebih detail tentang teknik ini.",
                "foto" => "img"
            ],
        ];

        foreach ($penulis as $pen) {
            Penulis::create($pen);
        }
    }
}
