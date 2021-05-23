<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\FailedJobsContract;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(FailedJobsContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(FailedJobsContract::UUID)->unique();
            $table->text(FailedJobsContract::CONNECTION);
            $table->text(FailedJobsContract::QUEUE);
            $table->longText(FailedJobsContract::PAYLOAD);
            $table->longText(FailedJobsContract::EXCEPTION);
            $table->timestamp(FailedJobsContract::FAILED_AT)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(FailedJobsContract::TABLE);
    }
}
