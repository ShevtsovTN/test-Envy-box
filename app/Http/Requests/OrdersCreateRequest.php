<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersCreateRequest extends FormRequest
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
            'phone' => 'required|regex:/\+[0-9]{1,3}-[0-9]{3}-[0-9]{3}-[0-9]{3}/s',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            'phone.required' => 'The phone field is required',
            'phone.regex' => 'Phone number format is not correct',
            'message.required' => 'The message field is required',
        ];
    }
}
