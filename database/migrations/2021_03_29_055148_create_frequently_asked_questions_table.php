<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\FrequentlyAskedQuestionContract;

class CreateFrequentlyAskedQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(FrequentlyAskedQuestionContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(FrequentlyAskedQuestionContract::NAME);
            $table->text(FrequentlyAskedQuestionContract::CONTENT);
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
        Schema::dropIfExists(FrequentlyAskedQuestionContract::TABLE);
    }
}
