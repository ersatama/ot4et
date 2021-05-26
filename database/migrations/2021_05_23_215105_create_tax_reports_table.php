<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\TaxReportContract;

class CreateTaxReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TaxReportContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(TaxReportContract::IDENTIFICATION_NUMBER);
            $table->string(TaxReportContract::FULL_NAME);
            $table->string(TaxReportContract::YEAR);
            $table->tinyInteger(TaxReportContract::REPORT_TYPE)->default(0);
            $table->tinyInteger(TaxReportContract::TAX_CATEGORY)->default(0);
            $table->tinyInteger(TaxReportContract::DECLARATION_TYPE)->default(0);
            $table->string(TaxReportContract::NOTIFICATION_TYPE);
            $table->string(TaxReportContract::NOTIFICATION_YEAR);
            $table->tinyInteger(TaxReportContract::RESIDENT)->default(0);

            $table->string(TaxReportContract::I910_00_001);
            $table->string(TaxReportContract::INCOME_CASHLESS);
            $table->string(TaxReportContract::INCOME_CASHLESS_THREE_COMPONENT_SYSTEM);
            $table->string(TaxReportContract::INCOME_CASH);
            $table->string(TaxReportContract::INCOME_CASH_THREE_COMPONENT_SYSTEM);
            $table->string(TaxReportContract::I910_00_002);
            $table->string(TaxReportContract::I910_00_003);
            $table->string(TaxReportContract::PENSIONERS);
            $table->string(TaxReportContract::HANDICAPPED);
            $table->string(TaxReportContract::I910_00_004);
            $table->string(TaxReportContract::I910_00_005);
            $table->string(TaxReportContract::I910_00_006);
            $table->string(TaxReportContract::I910_00_007);
            $table->string(TaxReportContract::I910_00_008);
            $table->string(TaxReportContract::I910_00_009);

            $table->string(TaxReportContract::I910_00_012_FIRST_MONTH);
            $table->string(TaxReportContract::I910_00_012_SECOND_MONTH);
            $table->string(TaxReportContract::I910_00_012_THIRD_MONTH);
            $table->string(TaxReportContract::I910_00_012_FOURTH_MONTH);
            $table->string(TaxReportContract::I910_00_012_FIFTH_MONTH);
            $table->string(TaxReportContract::I910_00_012_SIXTH_MONTH);

            $table->string(TaxReportContract::I910_00_013_FIRST_MONTH);
            $table->string(TaxReportContract::I910_00_013_SECOND_MONTH);
            $table->string(TaxReportContract::I910_00_013_THIRD_MONTH);
            $table->string(TaxReportContract::I910_00_013_FOURTH_MONTH);
            $table->string(TaxReportContract::I910_00_013_FIFTH_MONTH);
            $table->string(TaxReportContract::I910_00_013_SIXTH_MONTH);

            $table->string(TaxReportContract::I910_00_014_FIRST_MONTH);
            $table->string(TaxReportContract::I910_00_014_SECOND_MONTH);
            $table->string(TaxReportContract::I910_00_014_THIRD_MONTH);
            $table->string(TaxReportContract::I910_00_014_FOURTH_MONTH);
            $table->string(TaxReportContract::I910_00_014_FIFTH_MONTH);
            $table->string(TaxReportContract::I910_00_014_SIXTH_MONTH);

            $table->string(TaxReportContract::I910_00_015_FIRST_MONTH);
            $table->string(TaxReportContract::I910_00_015_SECOND_MONTH);
            $table->string(TaxReportContract::I910_00_015_THIRD_MONTH);
            $table->string(TaxReportContract::I910_00_015_FOURTH_MONTH);
            $table->string(TaxReportContract::I910_00_015_FIFTH_MONTH);
            $table->string(TaxReportContract::I910_00_015_SIXTH_MONTH);

            $table->string(TaxReportContract::I910_00_016_FIRST_MONTH);
            $table->string(TaxReportContract::I910_00_016_SECOND_MONTH);
            $table->string(TaxReportContract::I910_00_016_THIRD_MONTH);
            $table->string(TaxReportContract::I910_00_016_FOURTH_MONTH);
            $table->string(TaxReportContract::I910_00_016_FIFTH_MONTH);
            $table->string(TaxReportContract::I910_00_016_SIXTH_MONTH);

            $table->string(TaxReportContract::I910_00_027_START);
            $table->string(TaxReportContract::I910_00_027_END);
            $table->string(TaxReportContract::I910_00_027_ACQUIRED);

            $table->string(TaxReportContract::I910_00_028);

            $table->string(TaxReportContract::TAX_PAYER_FULL_NAME);
            $table->string(TaxReportContract::TAX_PAYER_DATE);
            $table->string(TaxReportContract::GOVERNMENT_REVENUE_CODE);
            $table->string(TaxReportContract::GOVERNMENT_REVENUE_CODE_BY_PLACE);

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
        Schema::dropIfExists(TaxReportContract::TABLE);
    }
}
