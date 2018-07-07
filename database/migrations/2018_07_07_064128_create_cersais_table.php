<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCersaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cersai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id');
            $table->integer('group_asset_id');
            $table->integer('non_group_asset_id');
            $table->integer('propertyID');
            $table->text('propertyDescp');
            $table->integer('securityIntID');
            $table->date('dateOfFR');
            $table->date('dateOfComp');
            $table->text('remarks');
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
        Schema::dropIfExists('cersais');
    }
}
