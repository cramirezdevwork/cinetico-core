<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CreateMovieRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'gender_id' => 'required|numeric',
            'classification_id' => 'required|numeric',
            'name' => 'required|max:255',
            'synopsis' => 'required|max:2000',
            'release_date' => 'required|date',
            'coming_soon' => 'boolean'
        ];
    }

    /**
     * Return messages on validation error
     *
     * @return string[]
     */
    public function messages()
    {
        return [
            'gender_id.required' => 'The gender_id parameter is required',
            'gender_id.numeric' => 'The gender_id parameter must be in numeric format',
            'classification_id.required' => 'The classification_id parameter is required',
            'classification_id.numeric' => 'The classification_id parameter must be in numeric format',
            'name.required' => 'The name parameter is required',
            'name.max' => 'The name parameter should be max 255 length',
            'synopsis.required' => 'The synopsis parameter is required',
            'synopsis.max' => 'The synopsis parameter should be max 2000 length',
            'release_date.required' => 'The release_date parameter is required',
            'release_date.date' => 'The release_date parameter should be date format',
            'coming_soon.boolean' => 'The coming_soon parameter should be boolean'
        ];
    }

    /**
     * Return response on error
     *
     * @param Validator $validator
     * @return void
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}
