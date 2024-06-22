<?php

// TODO: Add documentation

namespace App\Services;

use App\Models\User;
use App\Repositories\Eloquent\UserRepository;

/**
 * Class UserService.
 */
class UserService
{
    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository(new User());
    }

    public function getUserAll()
    {
        return $this->userRepository->getUserAll();
    }

    public function getUserByUuid($uuid)
    {
        return $this->userRepository->getUserByUuid($uuid);
    }

    public function getUserWhere($column, $value)
    {
        return $this->userRepository->getUserWhere($column, $value);
    }

    public function createUser($data)
    {
        return $this->userRepository->createUser($data);
    }

    public function updateUser($data, $uuid)
    {
        dd(!$data['password']);

        if (!$data['password']) {
            $data->password = $this->getUserByUuid($uuid)->password;
        }

        return $this->userRepository->updateUser($data, $uuid);
    }

    public function deleteUser($uuid)
    {
        return $this->userRepository->deleteUser($uuid);
    }

    public function deleteUserWhere($column, $value)
    {
        return $this->userRepository->deleteUserWhere($column, $value);
    }
}
