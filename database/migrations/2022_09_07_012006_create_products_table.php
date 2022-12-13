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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->nullable()->comment('รหัสสินค้า');
            $table->string('name')->nullable()->comment('ชื่อสินค้า');
            $table->string('price')->nullable()->comment('ราคา');
            $table->string('description')->nullable()->comment('รายละเอียด');
            $table->string('image')->nullable()->comment('รูปสินค้า');
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
        Schema::dropIfExists('products');
    }
};
