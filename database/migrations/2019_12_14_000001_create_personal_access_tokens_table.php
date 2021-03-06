<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\PersonalAccessToken;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(PersonalAccessToken::TABLE, function (Blueprint $table) {
            $table->bigIncrements(PersonalAccessToken::ID);
            $table->morphs(PersonalAccessToken::TOKENABLE);
            $table->string(PersonalAccessToken::NAME);
            $table->string(PersonalAccessToken::TOKEN, 64)->unique();
            $table->text(PersonalAccessToken::ABILITIES)->nullable();
            $table->timestamp(PersonalAccessToken::LAST_USED_AT)->nullable();
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
        Schema::dropIfExists(PersonalAccessToken::TABLE);
    }
}
