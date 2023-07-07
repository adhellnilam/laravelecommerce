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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->require();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');

            $table->unsignedBigInteger('category_id')->require();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');

            $table->unsignedBigInteger('user_id')->require();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

            $table->unsignedBigInteger('admin_id')->require();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('restrict');

            $table->string('quantity',100);
            $table->string('payment',100);
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
        Schema::dropIfExists('transactions');
    }
};
