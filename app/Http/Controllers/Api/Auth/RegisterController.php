<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;

use App\Domain\Contracts\UserContract;
use App\Domain\Contracts\EgovContract;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RegisterEgovRequest;

use App\Http\Resources\UserResource;

use App\Services\UserService;
use App\Services\EgovService;

class RegisterController extends Controller
{
    protected $userService;
    protected $egovService;
    public function __construct(UserService $userService, EgovService $egovService) {
        $this->userService  =   $userService;
        $this->egovService  =   $egovService;
    }

    public function register(RegisterRequest $request) {
        $user   =   $this->userService->create($request->all());
        $token  =   $user->createToken(env(UserContract::APP_NAME));
        return response([
            UserContract::USER  =>  new UserResource($user),
            UserContract::TOKEN =>  $token->plainTextToken
        ]);
    }

    public function registerEgov(RegisterEgovRequest $request) {
        $data   =   $this->egovService->register(
            $request->file(EgovContract::ECP),
            $request->input(EgovContract::PASSWORD)
        );
        if (sizeof($data) > 0) {
            $user   =   $this->userService->createByEgov($data,$request->input(EgovContract::PASSWORD));
            $token  =   $user->createToken(env(UserContract::APP_NAME));
            return response([
                UserContract::USER  =>  new UserResource($user),
                UserContract::TOKEN =>  $token->plainTextToken
            ]);
        }
        return response([UserContract::MESSAGE  =>  'Не правильный эцп или пароль'],400);
    }
}
