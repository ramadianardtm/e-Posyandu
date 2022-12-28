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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('nokk');
            $table->string('jeniskelamin');
            $table->date('dob');
            $table->string('address');
            $table->string('namaayah');
            $table->string('namaibu');
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
        Schema::dropIfExists('balitas');
    }
};
