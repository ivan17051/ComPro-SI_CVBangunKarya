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
            $table->increments('id_pengeluaran');
            $table->date('tanggal_belanja');
            $table->string('list_belanja');
            $table->text('kategori');
            $table->text('deskripsi');
            $table->integer('jumlah_barang');
            $table->integer('harga_satuan');
            $table->integer('jumlah');
            $table->string('nama_toko');
            $table->mediumText('upload_struk')->nullable();
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
