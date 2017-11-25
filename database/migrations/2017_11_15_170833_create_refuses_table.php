<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rf_id');
            $table->string('rf_name');
            $table->text('rf_img_path');
            $table->string('rf_cat');
            $table->string('unit_id');
            $table->string('rf_status')->comment('active,inactive');
            $table->string('rf_value_type')->comment('m=money, p= point');
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
        Schema::dropIfExists('refuses');
    }
}
