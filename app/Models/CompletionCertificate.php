<?php

namespace App\Models;

use App\Domain\Contracts\CompletionCertificateContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletionCertificate extends Model
{
    use HasFactory;

    protected $fillable = CompletionCertificateContract::FILLABLE;

    public function products()
    {
        return $this->morphToMany(Product::class,'producible');
    }


    public function services()
    {
        return $this->morphToMany(Service::class,'serviceable');
    }
}
