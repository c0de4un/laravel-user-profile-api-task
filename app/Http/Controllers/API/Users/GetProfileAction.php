<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\GetProfileRequest;
use App\Http\Resources\Users\UserResource;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class GetProfileAction extends Controller
{
    /**
     * @param GetProfileRequest  $request
     * @return JsonResponse
     */
    public function index(GetProfileRequest $request): JsonResponse
    {
        /** @var UserRepository $repo */
        $repo = App::make(UserRepository::class);
        try {
            $user = $repo->getById($request->id);
        } catch (\Throwable $ex) {
            Log::error($ex);

            return response()->json([
                'message' => 'unexpected error, try again later',
            ], 500);
        }

        if (!$user) {
            return response()->json([
                'errors' => [
                    'id' => 'user not found',
                ],
            ], 404);
        }

        return response()->json(new UserResource($user));
    }
}
