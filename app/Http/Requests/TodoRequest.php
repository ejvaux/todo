<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'date' => 'required|after_or_equal:today',
            'title' => 'required|max:100',
            'description' => 'required|max:100',
        ];
    }
    public function messages()
    {
        return [
            'date.required' => 'please select date',
            'date.after_or_equal' => "Input date must be greater than or equal to today's date",
            'title.required'  => 'please input title',
            'title.max' => 'Maximum characters should be less than 100',
            'description.required' => 'please input description',            
            'description.max' => 'Maximum characters should be less than 100',
        ];
    }
}
