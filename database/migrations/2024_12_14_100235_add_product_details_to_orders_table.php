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
            if (!Schema::hasColumn('orders', 'product_name')) {
                $table->string('product_name')->after('gcash_number');
            }
            if (!Schema::hasColumn('orders', 'product_price')) {
                $table->decimal('product_price', 10, 2)->after('product_name');
            }
            if (!Schema::hasColumn('orders', 'quantity')) {
                $table->integer('quantity')->after('product_price');
            }
            if (!Schema::hasColumn('orders', 'total_price')) {
                $table->decimal('total_price', 10, 2)->after('quantity');
            }
        });
    }


    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['product_name', 'product_price', 'quantity', 'total_price']);
        });
    }

};
