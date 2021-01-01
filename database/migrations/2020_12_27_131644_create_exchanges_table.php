<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->unsignedBigInteger('from_method');
            $table->foreign('from_method', 'e_fm')->references('id')->on('payment_methods');
            $table->unsignedBigInteger('to_method');
            $table->foreign('to_method', 'e_tm')->references('id')->on('payment_methods');
            $table->string('transfer_from_id');
            $table->string('transfer_from_transaction_id');
            $table->string('transfer_to_id');
            $table->string('transfer_to_transaction_id');
            $table->decimal('amount', 20, 2);
            $table->date('date');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id', 'e_sid')->references('id')->on('statuses');
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
        Schema::dropIfExists('exchanges');
    }
}
