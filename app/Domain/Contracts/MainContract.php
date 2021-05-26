<?php


namespace App\Domain\Contracts;


abstract class MainContract
{
    const ID    =   'id';
    const NAME  =   'name';
    const EMAIL =   'email';
    const USER  =   'user';
    const TOKEN =   'token';
    const SUM   =   'sum';
    const PRICE =   'price';
    const BRAND =   'brand';
    const COLOR =   'color';
    const DEAL  =   'deal';
    const DATE  =   'date';
    const ORDER =   'order';
    const TEXT  =   'text';
    const DESC  =   'desc';
    const NEWS  =   'news';
    const USERS =   'users';
    const UUID  =   'uuid';
    const QUEUE =   'queue';
    const VALUE =   'value';
    const ECP   =   'ecp';
    const TITLE =   'title';
    const ON    =   'on';
    const OFF   =   'off';
    const YEAR  =   'year';

    const FULL_NAME =   'full_name';
    const STATUS    =   'status';
    const ABILITIES =   'abilities';
    const TOKENABLE =   'tokenable';
    const FAILED_AT =   'failed_at';
    const EXCEPTION =   'exception';
    const PAYLOAD   =   'payload';
    const ADDRESS   =   'address';
    const QUESTION  =   'question';
    const QUESTIONS =   'questions';
    const CONTENT   =   'content';
    const PRODUCT   =   'product';
    const PRODUCTS  =   'products';
    const INVOICE   =   'invoice';
    const AMOUNT    =   'amount';
    const MESSAGE   =   'message';
    const BARCODE   =   'barcode';
    const SORT_TYPE =   'sort_type';
    const SEARCH    =   'search';
    const USER_ID   =   'user_id';
    const APP_NAME  =   'APP_NAME';
    const SALARY    =   'salary';
    const ROLE_ID   =   'role_id';
    const LAST_NAME =   'last_name';
    const PASSWORD  =   'password';
    const QUANTITY  =   'quantity';
    const INVOICES  =   'invoices';
    const SERVICES  =   'services';
    const SERVICE   =   'service';
    const TMP_NAME  =   'tmp_name';
    const KEY_USAGE =   'keyUsage';
    const RESIDENT  =   'resident';
    const INCOME    =   'income';

    const I910_00_001   =   '910_00_001';
    const I910_00_002   =   '910_00_002';
    const I910_00_003   =   '910_00_003';
    const I910_00_004   =   '910_00_004';
    const I910_00_005   =   '910_00_005';
    const I910_00_006   =   '910_00_006';
    const I910_00_007   =   '910_00_007';
    const I910_00_008   =   '910_00_008';
    const I910_00_009   =   '910_00_009';
    const I910_00_027   =   '910_00_009';
    const I910_00_028   =   '910_00_028';

    const INCOME_CASH   =   'income_cash';
    const TAX_CATEGORY  =   'tax_category';
    const REPORT_TYPE   =   'report_type';
    const SERVICE_ID    =   'service_id';
    const PRODUCT_ID    =   'product_id';
    const SHORT_NAME    =   'short_name';
    const LAST_USED_AT  =   'last_used_at';
    const CONNECTION    =   'connection';
    const CREATED_AT    =   'created_at';
    const ORGANIZATION  =   'organization';
    const MAIN_IMAGE    =   'main_image';
    const DIMENSIONS    =   'dimensions';
    const PARTNER_ID    =   'partner_id';
    const CERTIFICATE   =   'certificate';
    const IS_PRODUCT    =   'is_product';
    const DIMENSION_ID  =   'dimension_id';
    const CERTIFICATES  =   'certificates';
    const SORT_VALUE    =   'sort_value';
    const CURRENCY_ID   =   'currency_id';
    const FIRST_NAME    =   'first_name';
    const ORDER_NUMBER  =   'order_number';
    const TOTAL_AMOUNT  =   'total_amount';
    const PRODUCIBLE_ID =   'producible_id';
    const PENSIONERS    =   'pensioners';
    const HANDICAPPED   =   'handicapped';

    const FIRST_SEMESTER    =   'first_semester';
    const SECOND_SEMESTER   =   'second_semester';
    const TAX_ADJUSTMENT    =   'tax_adjustment';
    const ASSESSED_TAXES    =   'assessed_taxes';

    const ADJUSTMENT_INCOME =   'adjustment_income';
    const NOTIFICATION_YEAR =   'notification_year';
    const NOTIFICATION_TYPE =   'notification_type';
    const DECLARATION_TYPE  =   'declaration_type';
    const SERVICEABLE_TYPE  =   'serviceable_type';
    const SERVICEABLE_ID    =   'serviceable_id';
    const PRODUCIBLE_TYPE   =   'producible_type';
    const PAYMENT_ACCOUNT   =   'payment_account';
    const DOCUMENT_NUMBER   =   'document_number';
    const ORGANIZATION_ID   =   'organization_id';
    const REMEMBER_TOKEN    =   'remember_token';
    const EMAIL_VERIFIED_AT =   'email_verified_at';
    const INCOME_CASHLESS   =   'income_cashless';
    const I910_00_027_START =   '910_00_027_start';
    const I910_00_027_END   =   '910_00_027_end';
    const TAX_PAYER_DATE    =   'tax_payer_date';

    const TAX_PAYER_FULL_NAME   =   'tax_payer_full_name';
    const I910_00_027_ACQUIRED  =   '910_00_027_acquired';
    const NUMBER_OF_EMPLOYEES   =   'number_of_employees';
    const IDENTIFICATION_NUMBER =   'identification_number';
    const DATE_OF_CONSTRUCTING  =   'date_of_constructing';

    const I910_00_012_FIRST_MONTH   =   '910_00_012_first_month';
    const I910_00_012_SECOND_MONTH  =   '910_00_012_second_month';
    const I910_00_012_THIRD_MONTH   =   '910_00_012_third_month';
    const I910_00_012_FOURTH_MONTH  =   '910_00_012_fourth_month';
    const I910_00_012_FIFTH_MONTH   =   '910_00_012_fifth_month';
    const I910_00_012_SIXTH_MONTH   =   '910_00_012_sixth_month';

    const I910_00_013_FIRST_MONTH   =   '910_00_013_first_month';
    const I910_00_013_SECOND_MONTH  =   '910_00_013_second_month';
    const I910_00_013_THIRD_MONTH   =   '910_00_013_third_month';
    const I910_00_013_FOURTH_MONTH  =   '910_00_013_fourth_month';
    const I910_00_013_FIFTH_MONTH   =   '910_00_013_fifth_month';
    const I910_00_013_SIXTH_MONTH   =   '910_00_013_sixth_month';

    const I910_00_014_FIRST_MONTH   =   '910_00_014_first_month';
    const I910_00_014_SECOND_MONTH  =   '910_00_014_second_month';
    const I910_00_014_THIRD_MONTH   =   '910_00_014_third_month';
    const I910_00_014_FOURTH_MONTH  =   '910_00_014_fourth_month';
    const I910_00_014_FIFTH_MONTH   =   '910_00_014_fifth_month';
    const I910_00_014_SIXTH_MONTH   =   '910_00_014_sixth_month';

    const I910_00_015_FIRST_MONTH   =   '910_00_015_first_month';
    const I910_00_015_SECOND_MONTH  =   '910_00_015_second_month';
    const I910_00_015_THIRD_MONTH   =   '910_00_015_third_month';
    const I910_00_015_FOURTH_MONTH  =   '910_00_015_fourth_month';
    const I910_00_015_FIFTH_MONTH   =   '910_00_015_fifth_month';
    const I910_00_015_SIXTH_MONTH   =   '910_00_015_sixth_month';

    const I910_00_016_FIRST_MONTH   =   '910_00_016_first_month';
    const I910_00_016_SECOND_MONTH  =   '910_00_016_second_month';
    const I910_00_016_THIRD_MONTH   =   '910_00_016_third_month';
    const I910_00_016_FOURTH_MONTH  =   '910_00_016_fourth_month';
    const I910_00_016_FIFTH_MONTH   =   '910_00_016_fifth_month';
    const I910_00_016_SIXTH_MONTH   =   '910_00_016_sixth_month';

    const CALCULATION_COEFFICIENT   =   'calculation_coefficient';
    const GOVERNMENT_REVENUE_CODE   =   'government_revenue_code';
    const ASSESSED_TAXES_910_00_005 =   'assessed_taxes_910_00_005';
    const ASSESSED_TAXES_910_00_006 =   'assessed_taxes_910_00_006';

    const AVERAGE_SALARY_PER_EMPLOYEE   =   'average_salary_per_employee';

    const BUSINESS_IDENTIFICATION_NUMBER    =   'business_identification_number';
    const GOVERNMENT_REVENUE_CODE_BY_PLACE  =   'government_revenue_code_by_place';

    const INCOME_CASH_THREE_COMPONENT_SYSTEM    =   'income_cash_three_component_system';

    const INCOME_CASHLESS_THREE_COMPONENT_SYSTEM    =   'income_cashless_three_component_system';

}
