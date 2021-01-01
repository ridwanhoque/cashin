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
            $table->unsignedBigInteger('exchange_from');
            $table->foreign('exchange_from', 'e_ef')->references('id')->on('accounts');
            $table->unsignedBigInteger('exchange_to');
            $table->foreign('exchange_to', 'e_et')->references('id')->on('accounts');
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
