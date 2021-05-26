<?php


namespace App\Domain\Contracts;


class TaxReportContract extends MainContract {
    const TABLE =   'tax_reports';
    const FILLABLE  =   [
        self::IDENTIFICATION_NUMBER,
        self::FULL_NAME,
        self::YEAR,
        self::REPORT_TYPE,
        self::TAX_CATEGORY,
        self::DECLARATION_TYPE,
        self::NOTIFICATION_TYPE,
        self::NOTIFICATION_YEAR,
        self::RESIDENT,

        self::I910_00_001,
        self::INCOME_CASHLESS,
        self::INCOME_CASHLESS_THREE_COMPONENT_SYSTEM,
        self::INCOME_CASH,
        self::INCOME_CASH_THREE_COMPONENT_SYSTEM,
        self::I910_00_002,
        self::I910_00_003,
        self::PENSIONERS,
        self::HANDICAPPED,
        self::I910_00_004,
        self::I910_00_005,
        self::I910_00_006,
        self::I910_00_007,
        self::I910_00_008,
        self::I910_00_009,

        self::I910_00_012_FIRST_MONTH,
        self::I910_00_012_SECOND_MONTH,
        self::I910_00_012_THIRD_MONTH,
        self::I910_00_012_FOURTH_MONTH,
        self::I910_00_012_FIFTH_MONTH,
        self::I910_00_012_SIXTH_MONTH,
        self::I910_00_013_FIRST_MONTH,
        self::I910_00_013_SECOND_MONTH,
        self::I910_00_013_THIRD_MONTH,
        self::I910_00_013_FOURTH_MONTH,
        self::I910_00_013_FIFTH_MONTH,
        self::I910_00_013_SIXTH_MONTH,
        self::I910_00_014_FIRST_MONTH,
        self::I910_00_014_SECOND_MONTH,
        self::I910_00_014_THIRD_MONTH,
        self::I910_00_014_FOURTH_MONTH,
        self::I910_00_014_FIFTH_MONTH,
        self::I910_00_014_SIXTH_MONTH,
        self::I910_00_015_FIRST_MONTH,
        self::I910_00_015_SECOND_MONTH,
        self::I910_00_015_THIRD_MONTH,
        self::I910_00_015_FOURTH_MONTH,
        self::I910_00_015_FIFTH_MONTH,
        self::I910_00_015_SIXTH_MONTH,
        self::I910_00_016_FIRST_MONTH,
        self::I910_00_016_SECOND_MONTH,
        self::I910_00_016_THIRD_MONTH,
        self::I910_00_016_FOURTH_MONTH,
        self::I910_00_016_FIFTH_MONTH,
        self::I910_00_016_SIXTH_MONTH,

        self::I910_00_027_START,
        self::I910_00_027_END,
        self::I910_00_027_ACQUIRED,

        self::I910_00_028,

        self::TAX_PAYER_FULL_NAME,
        self::TAX_PAYER_DATE,
        self::GOVERNMENT_REVENUE_CODE,
        self::GOVERNMENT_REVENUE_CODE_BY_PLACE,
    ];
}