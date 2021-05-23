<?php

namespace App\Models;

use App\Domain\Contracts\PartnerContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = PartnerContract::FILLABLE;
}
