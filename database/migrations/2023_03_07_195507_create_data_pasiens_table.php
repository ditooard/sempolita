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
        Schema::create('data_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('alamat', 150);
            $table->string('bb', 15);
            $table->string('tb', 15);
            $table->string('td', 15);
            $table->string('dpm', 15);
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
        Schema::dropIfExists('data_pasien');
    }
};
