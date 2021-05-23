<?php

namespace App\Domain\Contracts;


class PaymentInvoiceContract extends MainContract
{

    public const TABLE = 'payment_invoices';

    public const FILLABLE = [
        self::PARTNER_ID,
        self::DEAL,
        self::AMOUNT,
        self::CURRENCY_ID,
        self::DOCUMENT_NUMBER,
        self::DATE,
        self::ORGANIZATION_ID
    ];
}
