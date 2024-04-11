<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResultRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "date" => "required",
            "note" => "required|string",
            "team1_id" => "required|integer",
            "team1_score" => "required|integer|max:21",
            "team2_id" => "required|integer",
            "team2_score" => "required|integer|max:21"
        ];
    }
}
