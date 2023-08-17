<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoteRequest extends FormRequest
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
            'user_id' => 'required', 
            'title' => 'required|min:1 ', 
            'text' => 'required|min:1 ', 
            'status' => 'required|min:1', 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
