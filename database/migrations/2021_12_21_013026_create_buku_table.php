<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tahun');
            $table->integer('jumlah_hal');
            $table->string('nama_foto')->nullable();
            $table->string('link_foto')->nullable();
            $table->string('berat');
            $table->string('isbn')->nullable();
            $table->string('link_beli')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('penulis_id');
            $table->integer('kategori_id');
            $table->integer('penerbit_id');
            $table->integer('librarian_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
