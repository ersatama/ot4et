<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\PaymentInvoiceContract;

class CreatePaymentInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(PaymentInvoiceContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(PaymentInvoiceContract::PARTNER_ID)->constrained();
            $table->string(PaymentInvoiceContract::DEAL);
            $table->integer(PaymentInvoiceContract::AMOUNT);
            $table->foreignId(PaymentInvoiceContract::CURRENCY_ID)->constrained();
            $table->integer(PaymentInvoiceContract::DOCUMENT_NUMBER)->nullable();
            $table->date(PaymentInvoiceContract::DATE);
            $table->foreignId(PaymentInvoiceContract::ORGANIZATION_ID)->nullable()->constrained();
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
        Schema::dropIfExists(PaymentInvoiceContract::TABLE);
    }
}
