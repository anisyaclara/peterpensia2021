<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTransactionsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_transaction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('asset_group_id');
            $table->integer('asset_type_id');
            $table->string('asset_group_name');
            $table->string('asset_type_name');
            $table->integer('total');
            $table->string('description');
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
        Schema::dropIfExists('asset_transactions_details');
    }
}
