<?php


namespace App\Domain\Contracts;


class CompletionCertificateContract extends MainContract
{
    const TABLE =   'completion_certificates';

    const FILLABLE  =   [
        self::USER_ID,
        self::ORGANIZATION_ID,
        self::CURRENCY_ID,
        self::SUM,
        self::ORDER_NUMBER,
        self::DOCUMENT_NUMBER,
        self::DATE_OF_CONSTRUCTING,
    ];
}
