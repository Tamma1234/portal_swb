<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QueryRequest extends FormRequest
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
    public function attributes()
    {
        return [
            'file' => 'File',
        ];
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required|mimes:jpeg,jpg,png,gif,pdf|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'max' => ':attribute must be less 225 kí tự',
            'mimes' => ':attribute format jpg, png, jpeg,',
            'file.max' => ':attribute less than 2mb',
        ];
    }
}
