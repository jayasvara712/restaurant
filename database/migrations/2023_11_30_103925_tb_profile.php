<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_profile', function (Blueprint $table) {
            $table->id('id_profile');
            $table->string('logo');
            $table->string('name')->unique();
            $table->string('address');
            $table->string('telephone');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('maps');
            $table->string('open_hours');
            $table->string('about_us');
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
        Schema::dropIfExists('tb_profile');
    }
}
