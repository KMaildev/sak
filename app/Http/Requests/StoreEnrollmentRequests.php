<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollmentRequests extends FormRequest
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
            'name' => 'required',
            'education' => 'required',
            'date_of_birth' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'nrc_no' => 'required',
            'passport' => 'required',
            'weight' => 'required',
            'contact_address' => 'required',
            'permanent_address' => 'required',
            'phone_no' => 'required',
            'entry_number' => 'required',
            'photo' => 'required',
        ];
    }
}
