<?php

namespace App\Http\Requests\API\Users;

use App\Http\Requests\API\APIRequest;
use App\Enums\Genders;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rule;

/**
 * @property int            id
 * @mixin APIRequest
 */
class GetProfileRequest extends APIRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'numeric', 'min:1'],
        ];
    }
}
