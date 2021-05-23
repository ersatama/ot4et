<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginEgovRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Services\UserService;
use App\Services\EgovService;
use App\Domain\Contracts\UserContract;
use App\Domain\Contracts\EgovContract;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $userService;
    protected $egovService;
    public function __construct(UserService $userService, EgovService $egovService) {
        $this->userService  =   $userService;
        $this->egovService  =   $egovService;
    }

    public function login(LoginRequest $request) {
        $user = $this->userService->getByEmail($request->email);

        if (Hash::check($request->password,$user->password)){
            $token = $user->createToken(env(UserContract::APP_NAME));
            return response([
                UserContract::USER      =>  $user,
                UserContract::TOKEN     =>  $token->plainTextToken,
                UserContract::MESSAGE   =>  'Вы успешно вошли в систему',

            ],200);
        } else {
            return response([
                UserContract::MESSAGE   =>  'У вас неправильный логин или пароль'
            ],422);
        }
    }

    public function loginEgov(LoginEgovRequest $request) {
        $data   =   $this->egovService->login(
            $request->file(EgovContract::ECP),
            $request->input(EgovContract::PASSWORD)
        );
        if (sizeof($data) > 0) {

        }
        return [];
    }
}
