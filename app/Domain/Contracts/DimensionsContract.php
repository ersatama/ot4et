<?php


namespace App\Domain\Contracts;


class DimensionsContract extends MainContract
{
    const TABLE =   'dimensions';
    const FILLABLE  =   [
        self::NAME,
        self::SHORT_NAME
    ];
}
