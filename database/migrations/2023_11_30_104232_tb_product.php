<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product', function (Blueprint $table) {
            $table->id('id_product');
            $table->foreignId('id_category')->constrained('tb_category', 'id_category')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name_product')->unique();
            $table->string('description_product');
            $table->integer('discount')->nullable();
            $table->integer('price');
            $table->string('image_product');
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
        Schema::dropIfExists('tb_product');
    }
}
