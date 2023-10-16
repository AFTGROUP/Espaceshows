<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegistrationRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:users',
            'telephone' => 'required|string',
            'password' => 'required|string|min:8|max:25|confirmed',
            'temporary_token' => 'required'
        ];
    }

    public function getAttributes()
    {
        return $this->validated();
    }

    protected function failedValidation($validator)
    {
        throw new HttpResponseException(response()->json([
            'error' => 'Validation failed',
            'message' => $validator->errors(),
        ], 422));
    }

    protected function formatErrors($validator)
    {
        return $validator->errors();
    }
}
