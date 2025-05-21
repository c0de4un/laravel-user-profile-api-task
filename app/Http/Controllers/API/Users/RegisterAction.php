<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\RegistrationRequest;
use App\Http\Resources\Users\UserResource;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RegisterAction extends Controller
{
    /**
     * @param RegistrationRequest  $request
     * @return JsonResponse
     */
    public function index(RegistrationRequest $request): JsonResponse
    {
        /** @var UserRepository $repo */
        $repo = App::make(UserRepository::class);

        DB::beginTransaction();
        try {
            $user = $repo->createFromRequest($request);
        } catch (\Throwable $ex) {
            DB::rollBack();

            Log::error($ex);

            return response()->json([
                'message' => 'unexpected error, try again later',
            ], 500);
        }
        DB::commit();

        return response()->json(new UserResource($user), 201);
    }
}
