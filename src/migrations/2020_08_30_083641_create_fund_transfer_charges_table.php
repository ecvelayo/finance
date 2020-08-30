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
            $table->string('charge');
            $table->string('currency');
            $table->string('destination');
            $table->string('minimum_amount');
            $table->string('maximum_amount');
            $table->dateTime('effective_date');
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
