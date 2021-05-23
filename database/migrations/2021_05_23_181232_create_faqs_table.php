<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\FaqContract;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(FaqContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(FaqContract::TITLE)->nullable();
            $table->text(FaqContract::DESC)->nullable();
            $table->enum(FaqContract::STATUS,[
                FaqContract::ON,
                FaqContract::OFF
            ])->default(FaqContract::ON);
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
        Schema::dropIfExists(FaqContract::TABLE);
    }
}
