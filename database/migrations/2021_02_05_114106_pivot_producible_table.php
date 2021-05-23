<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\PivotProducibleContract;

class PivotProducibleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(PivotProducibleContract::TABLE, function (Blueprint $table) {
            $table->integer(PivotProducibleContract::PRODUCT_ID);
            $table->integer(PivotProducibleContract::PRODUCIBLE_ID);
            $table->string(PivotProducibleContract::PRODUCIBLE_TYPE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(PivotProducibleContract::TABLE);

    }
}
