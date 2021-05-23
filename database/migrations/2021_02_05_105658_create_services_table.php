<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\ServiceContract;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ServiceContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(ServiceContract::NAME);
            $table->integer(ServiceContract::PRICE);
            $table->foreignId(ServiceContract::ORGANIZATION_ID)->constrained();
            $table->foreignId(ServiceContract::CURRENCY_ID)->constrained();
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
        Schema::dropIfExists(ServiceContract::TABLE);
    }
}
