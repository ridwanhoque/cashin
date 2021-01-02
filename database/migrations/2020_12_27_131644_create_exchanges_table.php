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
            $table->unsignedBigInteger('sent_method');
            $table->foreign('sent_method', 'e_sm')->references('id')->on('payment_methods');
            $table->unsignedBigInteger('received_method');
            $table->foreign('received_method', 'e_rm')->references('id')->on('payment_methods');
            $table->string('senderr_id');
            $table->string('sender_transaction_id');
            $table->string('receiver_id');
            $table->string('receiver_transaction_id');
            $table->decimal('sent_amount', 20, 2);
            $table->decimal('received_amount', 20, 2);
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
