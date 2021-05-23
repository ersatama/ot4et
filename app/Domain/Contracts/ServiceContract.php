<?php


namespace App\Domain\Contracts;


class ServiceContract extends MainContract
{
    const TABLE =   'services';

    const FILLABLE  =   [
        self::NAME,
        self::PRICE,
        self::ORGANIZATION_ID,
        self::CURRENCY_ID
    ];
}
