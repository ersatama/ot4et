<?php


namespace App\Domain\Contracts;


class ProductParameterContract extends MainContract
{
    const TABLE =   'product_parameters';
    const FILLABLE  =   [
        self::PRODUCT_ID,
        self::NAME,
        self::VALUE
    ];
}
