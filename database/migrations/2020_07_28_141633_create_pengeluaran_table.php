<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_proyek');
            $table->date('tanggal_belanja');
            $table->string('list_belanja');
            $table->text('deskripsi');
            $table->string('kategori');
            $table->integer('jumlah_barang');
            $table->bigInteger('harga_satuan');
            $table->bigInteger('jumlah');
            $table->string('nama_toko')->nullable();
            $table->mediumText('upload_bukti')->nullable();
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
        Schema::dropIfExists('pengeluaran');
    }
}
