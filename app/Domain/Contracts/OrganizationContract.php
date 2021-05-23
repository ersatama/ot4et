<?php


namespace App\Domain\Contracts;


class OrganizationContract extends MainContract
{
    const TABLE =   'organizations';
    const FILLABLE  =   [
        self::NAME,
        self::IDENTIFICATION_NUMBER,
        self::PAYMENT_ACCOUNT,
        self::BUSINESS_IDENTIFICATION_NUMBER
    ];
}
