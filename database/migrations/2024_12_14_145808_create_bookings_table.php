<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('product_name'); 
            $table->decimal('price', 10, 2); 
            $table->string('name');
            $table->string('email');
            $table->date('date');
            $table->time('time');
            $table->text('message')->nullable();
            $table->string('design')->nullable();
            $table->string('status')->default('processing');
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
