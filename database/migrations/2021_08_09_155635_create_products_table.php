<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size')->nullable();
            $table->string('Dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('short_desc');
            $table->text('desc')->nullable();
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->boolean('featured')->default(0);
            $table->integer('quantity')->default(2);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->foreignId('catigory_id')->constrained()->cascadeOnDelete();
            $table->foreignId('color_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
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
}
