<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id'); // FK to Asset Table
            $table->string('company_name', 100); // Company Name
            $table->float('acqPrice', 15, 2); // Company Acquisition price
            $table->float('OSAmt', 15, 2); // Company Outstanding Amount
            $table->float('ARCInvest', 15, 2); // CFMARC's investment
            $table->float('OtherInvest', 15, 2); // Seller Bank/FI/Other QIB's investments
            $table->float('vos', 15, 2); // Value of Security
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
        Schema::dropIfExists('group_assets');
    }
}
