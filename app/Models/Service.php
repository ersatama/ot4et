<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Contracts\ServiceContract;

class Service extends Model
{
    use HasFactory;

    protected $fillable =   ServiceContract::FILLABLE;

    public function completion_certificates()
    {
        return $this->morphedByMany(CompletionCertificate::class,'serviceable');
    }
}
