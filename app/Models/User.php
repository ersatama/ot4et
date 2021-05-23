<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Domain\Contracts\UserContract;

class User extends Authenticatable
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable =   UserContract::FILLABLE;
    protected $hidden   =   UserContract::HIDDEN;
    protected $casts    =   UserContract::CASTS;

    public function organizations()
    {
        return $this->belongsToMany(Organization::class,'user_organization');
    }
}
