<?php


namespace App\Domain\Contracts;


class NewsContract extends MainContract
{
    const TABLE =   'news';

    const FILLABLE  =   [
        self::NAME,
        self::MAIN_IMAGE,
        self::ORDER,
        self::TEXT
    ];
}
