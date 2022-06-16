<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
            'name'=>'required | max:255 | string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];

    }
    public function messages(){
        return[
            'name.required'=>'Không được bỏ trống',
            'name.max'=>'Không vượt quá kí tự cho phép',
            'age.numeric'=>'Phải là số',
            'date.string'=>'Mời nhập lại',
            'phone.numeric'=>'Phải là số',
            'web.string'=>'Kiểm tra lại',
            'address.string'=>'Không được bỏ trống'
        ];
    }
}
