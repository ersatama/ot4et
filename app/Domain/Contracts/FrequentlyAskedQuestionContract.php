<?php


namespace App\Domain\Contracts;


class FrequentlyAskedQuestionContract extends MainContract
{
    const TABLE =   'frequently_asked_questions';
    const FILLABLE  =   [
        self::NAME,
        self::CONTENT
    ];
}
