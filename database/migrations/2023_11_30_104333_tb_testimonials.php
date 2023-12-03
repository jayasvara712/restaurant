<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbTestimonials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_testimonials', function (Blueprint $table) {
            $table->id('id_testimoni');
            $table->string('name_testimoni');
            $table->string('image_testimoni');
            $table->integer('rate_testimoni');
            $table->string('description_testimoni');
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
        Schema::dropIfExists('tb_testimonials');
    }
}
