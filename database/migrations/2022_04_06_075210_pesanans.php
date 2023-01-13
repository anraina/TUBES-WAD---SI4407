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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id')->nullable();
            $table->foreignId('bundle_id')->nullable();
            $table->integer('totalHarga')->nullable();
            $table->string('namaPemesan')->nullable();
            $table->string('noTelepon')->nullable();
            $table->string('emailPemesan')->nullable();
            $table->string('buktiTf')->nullable();
            $table->string('status')->nullable();
            $table->date('tanggal');
            $table->foreignId('travel_agent_id');
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
        Schema::dropIfExists('pesanans');
    }
};
