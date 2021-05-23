<?php


namespace App\Domain\Contracts;

class ProductContract extends MainContract
{
    const TABLE =   'products';

    const FILLABLE  =   [
        self::NAME,
        self::BARCODE,
        self::DIMENSION_ID,
        self::PRICE,
        self::TOTAL_AMOUNT,
        self::BRAND,
        self::COLOR,
        self::ORGANIZATION_ID
    ];

}
