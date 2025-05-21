<?php

namespace App\Http\Requests\API\Users;

use App\Http\Requests\API\APIRequest;
use App\Enums\Genders;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rules\Enum;

/**
 * @property string            email
 * @property string            password
 * @property string            gender
 * @mixin APIRequest
 */
class RegistrationRequest extends APIRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'    => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'max:64'],
            'gender'   => ['required', new Enum(Genders::class)]
        ];
    }
}
