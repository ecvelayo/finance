<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundTransferChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_transfer_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('scope');
            $table->double('charge', 8, 2);
            $table->string('currency');
            $table->string('destination');
            $table->double('minimum_amount', 8, 2);
            $table->double('maximum_amount', 8, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fund_transfer_charges');
    }
}
