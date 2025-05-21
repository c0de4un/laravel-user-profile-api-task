<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class RegisterAction extends Controller
{
    /**
     * @param RegistrationRequest  $request
     * @return JsonResponse
     */
    public function index(RegistrationRequest $request): JsonResponse
    {
        $user = new User();

        // @TODO: Implement User creation with UserRepository

        return response()->json();
    }
}
