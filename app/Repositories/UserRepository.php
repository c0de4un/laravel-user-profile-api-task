<?php

namespace App\Repositories;

use App\Http\Requests\API\Users\RegistrationRequest;
use App\Models\User;

class UserRepository
{
    public function createFromRequest(RegistrationRequest $request): User
    {
        return User::create($request->toArray());
    }

    /**
     * @param int  $id
     * @return User|null
     */
    public function getById(int $id): ?User
    {
        return User::query()
            ->where('id', '=', $id)
            ->limit(1)
            ->first();
    }
}
