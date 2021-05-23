<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\PartnerContract;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(PartnerContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(PartnerContract::NAME);
            $table->string(PartnerContract::ADDRESS);
            $table->string(PartnerContract::IDENTIFICATION_NUMBER);
            $table->foreignId(PartnerContract::ORGANIZATION_ID)->constrained();
            $table->timestamps();
            $table->index(PartnerContract::ORGANIZATION_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(PartnerContract::TABLE);
    }
}
