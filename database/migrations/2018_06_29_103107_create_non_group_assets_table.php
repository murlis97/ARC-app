<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonGroupAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_group_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id'); // FK to Asset Table
            $table->boolean('ROC')->default('0'); // ROC Applicable of not
            $table->boolean('CERSAI')->default('0'); // CERSAI Applicable or not
            $table->text('lineOfAct')->default(NULL); // Line of Activity
            $table->text('RSRBI')->default(NULL); // Resolution Status as per RBI
            $table->text('finalRS')->default(NULL); // Final Resolution Status
            $table->text('OgDocs')->default(NULL); // Collection of Original Docs
            $table->text('remarks')->default(NULL); // Comapny Remarks
            $table->timestamps();

            $table->foreign('asset_id')->references('id')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_group_assets');
    }
}
