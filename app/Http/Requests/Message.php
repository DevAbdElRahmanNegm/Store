<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Message extends FormRequest
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
            'name'=>'required|min:2|max:50|string',
            'email'=>'required|min:2|max:50|email',
            'subject'=>'required|min:2|max:50|string',
            'number'=>'required|min:2|max:50|string',
            'message'=>'required|min:2|max:100|string',
        ];
    }
}
