<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ktp');
            $table->string('nama');
            $table->longText('alamat');
            $table->date('tanggallahir');
            $table->string('tempatlahir');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('wargaNegara');
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
        Schema::dropIfExists('penduduk');
    }
};
