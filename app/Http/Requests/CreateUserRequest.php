<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = User::$rules;
        $rules['profile'] = 'mimes:jpg,bmp,png,apng,avif,jpeg,';
        $rules['password'] = 'required|same:password_confirmation|min:8';

        return $rules;
    }
}
