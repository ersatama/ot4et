<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\OrganizationContract;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(OrganizationContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(OrganizationContract::NAME);
            $table->string(OrganizationContract::IDENTIFICATION_NUMBER)->nullable();
            $table->string(OrganizationContract::PAYMENT_ACCOUNT)->nullable();
            $table->string(OrganizationContract::BUSINESS_IDENTIFICATION_NUMBER);
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
        Schema::dropIfExists(OrganizationContract::TABLE);
    }
}
