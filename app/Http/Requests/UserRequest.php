<?php

namespace App\Http\Requests;

use App\Components\GenderOption;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            User::NAME => ['required','string'],
            User::EMAIL => ['required','email'],
            User::PHONE => ['required','string'],
            User::BIRTHDAY => ['required','date'],
            User::GENDER => ['required',GenderOption::factory()->regex()],
            User::PASSWORD => ['nullable','min:8'],
        ];
    }

}
