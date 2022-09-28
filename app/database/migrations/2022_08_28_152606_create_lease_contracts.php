<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id');
            $table->foreignId('signatory_id');
            $table->foreignId('building_id');
            $table->float('monthly_rent');
            $table->integer('duration');
            $table->dateTime('contract_start');
            $table->integer('number_of_advance');
            $table->integer('number_of_deposit');
            $table->string('mode_of_payment');
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
        Schema::dropIfExists('lease_contracts');
    }
};
