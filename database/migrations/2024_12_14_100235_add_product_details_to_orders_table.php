<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('product_name')->after('gcash_number');
            $table->decimal('product_price', 10, 2)->after('product_name');
            $table->integer('quantity')->after('product_price');
            $table->decimal('total_price', 10, 2)->after('quantity');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['product_name', 'product_price', 'quantity', 'total_price']);
        });
    }

};
