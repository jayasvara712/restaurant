<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_link', function (Blueprint $table) {
            $table->id('id_link');
            $table->foreignId('id_profile')->constrained('tb_profile', 'id_profile')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_link');
            $table->string('icon');
            $table->string('url');
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
        Schema::dropIfExists('tb_link');
    }
}
