<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriLombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_lombas', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['isc', 'fiqsi', 'osiris', 'gatra'])->nullable();
            $table->string('judul_singkat')->nullable();
            $table->string('judul_panjang')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('tema')->nullable();
            $table->text('link_instagram')->nullable();
            $table->text('link_registrasi')->nullable();
            $table->text('link_berkas')->nullable();
            $table->string('logo')->nullable();
            $table->string('nama_maskot')->nullable();
            $table->string('maskot')->nullable();
            $table->text('deskripsi_maskot')->nullable();
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
        Schema::dropIfExists('kategori_lombas');
    }
}
