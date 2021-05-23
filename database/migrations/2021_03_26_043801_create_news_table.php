<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\NewsContract;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(NewsContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(NewsContract::NAME);
            $table->string(NewsContract::MAIN_IMAGE);
            $table->integer(NewsContract::ORDER)->default(1);
            $table->longText(NewsContract::TEXT)->nullable();
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
        Schema::dropIfExists(NewsContract::TABLE);
    }
}
