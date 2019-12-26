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
            $table->increments('id');
            $table->uuid('product_ref')->index();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('content')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('sale_price', 8, 2)->default(0);
            $table->decimal('share_price', 8, 2)->default(0);
            // $table->integer('point')->default(0);
            $table->enum('status', ['available', 'unavailable', 'soldout', 'discount'])->default('available');

            $table->unsignedInteger('post_by');
            $table->foreign('post_by')->references('id')->on('admins');
            $table->softDeletes();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('products');
        Schema::enableForeignKeyConstraints();
    }
}
