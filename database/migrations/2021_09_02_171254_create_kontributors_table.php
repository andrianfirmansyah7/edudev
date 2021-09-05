<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontributor', function (Blueprint $table) {
            $table->char('id_kontributor',10)->primary();
            $table->string('nama_kontributor',40);
            $table->string('jabatan',30);
            $table->text('deskripsi',100);
            $table->string('gambar',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontributor');
    }
}
