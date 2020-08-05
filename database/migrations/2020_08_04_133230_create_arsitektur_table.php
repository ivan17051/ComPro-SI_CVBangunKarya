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
            $table->increments('id_arsitektur');
            $table->string('uraian');
            $table->string('kategori');
            $table->bigInteger('volume');
            $table->string('satuan');
            $table->bigInteger('harga_satuan');
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
