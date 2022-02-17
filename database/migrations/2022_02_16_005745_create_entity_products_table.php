<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_entity__categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name');
            $table->string('category_desc');
        });
        Schema::create('product_entity__tags', function (Blueprint $table) {
            $table->id('tag_id');
            $table->string('tag_name');
            $table->string('tag_desc');
        });
        Schema::create('product_entity__items', function (Blueprint $table) {
            $table->id('item_id');
            $table->string('item_title');
            $table->mediumText('item_desc');
            $table->string('item_price');
            $table->string('item_discount');
            $table->integer('item_star');
            $table->string('item_sku');
            $table->mediumText('item_image');
            $table->string('item_weight');
            $table->string('item_dimension');
            $table->string('item_material');
            $table->string('item_info');
            $table->integer('item_category');
            $table->string('item_tag');
            $table->boolean('item_new');
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
        Schema::dropIfExists('product_entity__categories');
        Schema::dropIfExists('product_entity__tags');
        Schema::dropIfExists('product_entity__items');
    }
}
