<?php


namespace App\Domain\Repositories;

use App\Domain\Repositories\interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Domain\Contracts\UserContract;
use Illuminate\Support\Facades\Hash;

class UserRepositoryEloquent implements UserRepositoryInterface
{
    public function getByEmail(string $email) {
        return User::where(UserContract::EMAIL,$email)->first();
    }

    public function create(array $data) {
        $data[UserContract::ROLE_ID]    =   1;
        $data[UserContract::PASSWORD]   =   Hash::make($data[UserContract::PASSWORD]);
        return User::create($data);
    }

    public function createByEgov(array $data, string $password) {
        $name   =   explode(' ',$data['subject']['commonName']);
        return User::create([
            UserContract::EMAIL     =>  null,
            UserContract::ROLE_ID   =>  1,
            UserContract::PASSWORD  =>  Hash::make($password),
            UserContract::NAME      =>  $data['subject']['commonName'],
            UserContract::FIRST_NAME    =>  $name[1],
            UserContract::LAST_NAME     =>  $name[0],
            UserContract::IDENTIFICATION_NUMBER =>  $data['iin'],
        ]);
    }
}
