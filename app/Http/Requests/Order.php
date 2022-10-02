<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Order extends FormRequest
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
            'product_name'=>'required|min:2|max:50|string',
            'product_id'=>'required|min:1|max:50|string',
            'name'=>'required|min:2|max:50|string',
            'phone'=>'required|min:2|max:50|string',
            'address'=>'required|min:2|max:100|string',



        ];
    }
}
