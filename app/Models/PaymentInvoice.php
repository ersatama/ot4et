<?php

namespace App\Models;

use App\Domain\Contracts\PaymentInvoiceContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInvoice extends Model
{
    use HasFactory;

    protected $fillable =  PaymentInvoiceContract::FILLABLE;
}
