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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balita_id')->references('id')->on('balitas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->string('date');
            $table->string('berat');
            $table->string('tinggi');
            $table->string('lingkar');
            $table->string('suhu');
            $table->string('imunisasi');
            $table->longText('keluhan');
            $table->longText('penanganan');
            $table->longText('catatan');
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
        Schema::dropIfExists('pemeriksaans');
    }
};
