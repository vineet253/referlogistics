<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pdo');
            $table->integer('docket_no');
            $table->string('enter_date');
            $table->string('pickup_date');
            $table->string('pickup_time');
            $table->string('delivery_date');
            $table->string('client_name');
            $table->integer('client_docket_no');
            $table->string('origin');
            $table->string('pickup_location');
            $table->string('destination');
            $table->string('payment_mode');
            $table->string('transport_mode');
            $table->string('rate_factors');  
            $table->string('consignor_name');
            $table->text('consignor_address_one');
            $table->text('consignor_address_two');
            $table->integer('consignor_address_pin');
            $table->string('consignor_phone');
            $table->string('consignor_email');
            $table->string('consignor_tin');
            $table->string('consignee_name');
            $table->text('consignee_address_one');
            $table->text('consignee_address_two');
            $table->integer('consignee_address_pin');
            $table->string('consignee_phone');
            $table->string('consignee_email');
            $table->string('consignee_tin');
            $table->string('risk_details');
            $table->text('insurance');
            $table->string('rate');
            $table->string('pvt_marks');
            $table->string('cod_noncod');
            $table->string('cod_amount');
            $table->integer('status')->unsigned()->comment = "enable=1|disable=0";
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
        Schema::dropIfExists('tracks');
    }
}
