<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\ProductContract;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ProductContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(ProductContract::NAME);
            $table->string(ProductContract::BARCODE);
            $table->foreignId(ProductContract::DIMENSION_ID)->constrained();
            $table->integer(ProductContract::PRICE);
            $table->integer(ProductContract::TOTAL_AMOUNT);
            $table->string(ProductContract::BRAND)->nullable();
            $table->string(ProductContract::COLOR)->nullable();
            $table->foreignId(ProductContract::ORGANIZATION_ID)->constrained();
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
        Schema::dropIfExists(ProductContract::TABLE);
    }
}
