<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'identification_number', 'payment_account','business_identification_number'
    ];

    public function getUsers($id)
    {
        return $this->belongsToMany(User::class)->where('role_id', '=', $id);
    }

    public function products($barcode = null)
    {
        return $this->hasMany(Product::class);

    }

    public function services($name = null)
    {
        return $this->hasMany(Service::class);

    }

    public function partners()
    {
        return $this->hasMany(Partner::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getDirector($id)
    {
        return $this->belongsToMany(User::class)->where('role_id', '=', $id)->first();
    }

}
