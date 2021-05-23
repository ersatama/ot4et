<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\CompletionCertificateContract;

class CreateCompletionCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CompletionCertificateContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(CompletionCertificateContract::USER_ID)->constrained();
            $table->foreignId(CompletionCertificateContract::ORGANIZATION_ID)->constrained();
            $table->foreignId(CompletionCertificateContract::CURRENCY_ID)->constrained();
            $table->integer(CompletionCertificateContract::SUM);
            $table->integer(CompletionCertificateContract::ORDER_NUMBER);
            $table->string(CompletionCertificateContract::DOCUMENT_NUMBER);
            $table->dateTime(CompletionCertificateContract::DATE_OF_CONSTRUCTING)->nullable();
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
        Schema::dropIfExists(CompletionCertificateContract::TABLE);
    }
}
