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
        Schema::table('travel_agents', function (Blueprint $table) {
            $table->string('username'); // baru   
            $table->string('level'); // baru
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travel_agents', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('level');
        });
    }
};
