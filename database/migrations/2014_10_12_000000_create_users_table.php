<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\UserContract;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(UserContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(UserContract::NAME);
            $table->string(UserContract::IDENTIFICATION_NUMBER)->unique();
            $table->string(UserContract::FIRST_NAME);
            $table->string(UserContract::LAST_NAME)->nullable();
            $table->text(UserContract::GOVERNMENT_REVENUE_CODE)->nullable();
            $table->text(UserContract::GOVERNMENT_REVENUE_CODE_BY_PLACE)->nullable();
            $table->bigInteger(UserContract::ROLE_ID);
            $table->integer(UserContract::SALARY)->nullable();
            $table->string(UserContract::EMAIL)->unique()->nullable();
            $table->timestamp(UserContract::EMAIL_VERIFIED_AT)->nullable();
            $table->string(UserContract::PASSWORD);
            $table->rememberToken();
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
        Schema::dropIfExists(UserContract::TABLE);
    }
}
