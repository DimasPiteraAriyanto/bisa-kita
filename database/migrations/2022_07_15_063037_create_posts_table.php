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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_product')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('id_product_detail')->constrained('product_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('domain')->nullable();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('memberId')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
