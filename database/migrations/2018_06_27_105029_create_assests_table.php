<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('assetName', 100); // Asset Name
            $table->integer('doi'); // Dealing officer ID
            $table->string('sellingInst', 100); // Name of selling institution or bank
            $table->date('dateofAcq'); // Date of acquistion of asset
            $table->float('OSAmt', 15, 2); // Outstanding Amt
            $table->float('acqPrice', 15, 2); // Acquistion Price
            $table->string('acqStruct', 15); // Acquistion Strucutre
            $table->string('nameOfTrust', 100);
            $table->float('ARCInvest', 15, 2); // CFMARC's investment
            $table->float('OtherInvest', 15, 2); // Seller Bank/FI/Other QIB's investments
            $table->float('vos', 15, 2); // Value of Security
            $table->string('investRationale', 512); // Investment Rationale
            $table->string('ratingSRs', 20); // Rating of SRs
            $table->date('registDate'); // Registration Date
            $table->date('DOADate'); // Deed of Assignment Date
            $table->date('cutoffDate');
            $table->boolean('AssetGroup'); // Asset Group or Non Group (Yes -> Group Asset)
            $table->date('doFirstReview'); // Date of First Review
            $table->string('remarks'); // Remarks
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
        Schema::dropIfExists('assets');
    }
}
