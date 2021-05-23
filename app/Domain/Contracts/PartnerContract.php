<?php


namespace App\Domain\Contracts;


class PartnerContract extends MainContract
{
    const TABLE =   'partners';

    const FILLABLE  =   [
        self::NAME,
        self::ADDRESS,
        self::IDENTIFICATION_NUMBER,
        self::ORGANIZATION_ID,
    ];
}
