<?php


namespace App\Services;

use App\Domain\Repositories\interfaces\UserRepositoryInterface;

class UserService
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository   =   $userRepository;
    }

    public function getByEmail(string $email) {
        return $this->userRepository->getByEmail($email);
    }

    public function create(array $data) {
        return $this->userRepository->create($data);
    }

    public function createByEgov(array $data, string $password) {
        return $this->userRepository->createByEgov($data, $password);
    }
}
