<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\DimensionsContract;

class CreateDimensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(DimensionsContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(DimensionsContract::NAME);
            $table->string(DimensionsContract::SHORT_NAME)->nullable();
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
        Schema::dropIfExists(DimensionsContract::TABLE);
    }
}
