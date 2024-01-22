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
        Schema::create('pendaki', function (Blueprint $table) {
            $table->id();
            $table->string('NIK',16)->unique();
            $table->string('nama',50)->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_hp',12)->nullable();
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
        Schema::dropIfExists('pendaki');
    }
};
