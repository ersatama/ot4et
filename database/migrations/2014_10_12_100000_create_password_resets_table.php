<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\PasswordResetsContract;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(PasswordResetsContract::TABLE, function (Blueprint $table) {
            $table->string(PasswordResetsContract::EMAIL)->index();
            $table->string(PasswordResetsContract::TOKEN);
            $table->timestamp(PasswordResetsContract::CREATED_AT)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(PasswordResetsContract::TABLE);
    }
}
