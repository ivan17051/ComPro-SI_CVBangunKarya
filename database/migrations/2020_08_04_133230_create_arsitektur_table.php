<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsitekturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsitektur', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_proyek');
            $table->string('uraian');
            $table->string('kategori');
            $table->Integer('volume');
            $table->string('satuan');
            $table->Integer('harga_satuan');
            $table->bigInteger('jumlah');
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
        Schema::dropIfExists('arsitektur');
    }
}
