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
}
