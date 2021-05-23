<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkerRequest;
use App\Models\Organization;
use Illuminate\Support\Facades\Hash;
use App\Services\UserService;
use App\Domain\Contracts\UserContract;

class WorkerController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService) {
        return $this->userService   =   $userService;
    }

    public function register(WorkerRequest $request,Organization $organization)
    {
        $data   =   $request->all();
        unset($data[UserContract::ORGANIZATION_ID]);
        $data[UserContract::PASSWORD] = Hash::make($data[UserContract::PASSWORD]);

        $organization->users()->save($this->userService->create($data));

        return response([
            UserContract::MESSAGE   =>  'Работник успешно добавлен'
        ],201);
    }

    public function index(Organization $organization)
    {
        return response([
            UserContract::USERS =>  $organization->getUsers(2)
        ],200);
    }

}
