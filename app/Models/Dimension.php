<?php

namespace App\Models;

use App\Domain\Contracts\DimensionsContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    use HasFactory;
    protected $fillable =   DimensionsContract::FILLABLE;
}
