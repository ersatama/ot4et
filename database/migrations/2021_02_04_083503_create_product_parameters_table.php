<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\ProductParameterContract;

class CreateProductParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ProductParameterContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(ProductParameterContract::PRODUCT_ID)->constrained();
            $table->string(ProductParameterContract::NAME);
            $table->string(ProductParameterContract::VALUE);
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
        Schema::dropIfExists(ProductParameterContract::TABLE);
    }
}
