<?php

namespace App\Models;

use App\Domain\Contracts\FrequentlyAskedQuestionContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequentlyAskedQuestion extends Model
{
    use HasFactory;
    protected $fillable =   FrequentlyAskedQuestionContract::FILLABLE;
}
