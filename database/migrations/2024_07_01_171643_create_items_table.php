<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
public function up()
{
    Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('vendor_id');
        $table->unsignedBigInteger('category_id');
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->integer('quantity');
        $table->timestamps();

        $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('items');
}
}
