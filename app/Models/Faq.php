<?php

namespace App\Models;

use App\Domain\Contracts\FaqContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable =   FaqContract::FILLABLE;
}
