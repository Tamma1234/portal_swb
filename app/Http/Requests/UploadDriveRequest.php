<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadDriveRequest extends FormRequest
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
            'full_name' => 'full_name',
            'gender' => 'gender',
            'date' => 'date',
            'dob' => 'dob',
            'user_email' => 'user_email',
            'phone_number' => 'phone_number',

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
            'full_name' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'dob' => 'required',
            'user_email' => 'email',
            'phone_number' => 'required',
            ''
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute full_name không được để trống',
            'mimes' => ':attribute format jpg, png, jpeg,',
            'file.max' => ':attribute less than 2mb',
        ];
    }
}
