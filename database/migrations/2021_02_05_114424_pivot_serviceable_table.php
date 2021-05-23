<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\PivotServiceableContract;

class PivotServiceableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(PivotServiceableContract::TABLE, function (Blueprint $table) {
            $table->integer(PivotServiceableContract::SERVICE_ID);
            $table->integer(PivotServiceableContract::SERVICEABLE_ID);
            $table->string(PivotServiceableContract::SERVICEABLE_TYPE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(PivotServiceableContract::TABLE);

    }
}
