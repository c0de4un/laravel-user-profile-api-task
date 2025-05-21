<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\GetProfileRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class GetProfileAction extends Controller
{
    /**
     * @param GetProfileRequest  $request
     * @return JsonResponse
     */
    public function index(GetProfileRequest $request): JsonResponse
    {
        $user = new User();

        // @TODO: Implement User creation with UserRepository

        return response()->json();
    }
}
