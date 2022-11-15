<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->longText('size_guide')->after('featured')->nullable();
            $table->longText('additional_info')->after('size_guide')->nullable();
            $table->string('status', 50)->after('additional_info')->nullable();
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
    }
}
