<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\UserOrganizationContract;

class UserOrganization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(UserOrganizationContract::TABLE,function (Blueprint $table){
            $table->foreignId(UserOrganizationContract::USER_ID)->constrained();
            $table->foreignId(UserOrganizationContract::ORGANIZATION_ID)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
