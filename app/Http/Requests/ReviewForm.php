<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ReviewForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'author' => 'required|max:100',
            'status' => 'required',
            'score' => 'required|integer',
            'summary' => 'required|max:1000',
        ];
    }
}
