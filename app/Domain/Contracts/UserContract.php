<?php


namespace App\Domain\Contracts;


class UserContract extends MainContract
{
    const TABLE =   'users';

    const FILLABLE  =   [
        self::NAME,
        self::EMAIL,
        self::PASSWORD,
        self::IDENTIFICATION_NUMBER,
        self::FIRST_NAME,
        self::ROLE_ID
    ];

    const HIDDEN    =   [
        self::PASSWORD,
        self::REMEMBER_TOKEN
    ];

    const CASTS =   [
        self::EMAIL_VERIFIED_AT =>  'datetime'
    ];
}
