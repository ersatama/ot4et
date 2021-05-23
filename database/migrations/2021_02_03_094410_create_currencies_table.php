<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\CurrenciesContract;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CurrenciesContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(CurrenciesContract::NAME);
            $table->string(CurrenciesContract::SHORT_NAME);
            $table->float(CurrenciesContract::CALCULATION_COEFFICIENT);
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
        Schema::dropIfExists(CurrenciesContract::TABLE);
    }
}
