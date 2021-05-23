<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Contracts\NewsContract;

class News extends Model
{
    use HasFactory;
    protected $fillable =   NewsContract::FILLABLE;
}
