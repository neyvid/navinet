<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegister extends FormRequest
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
            'mobile'=>array('required','regex:/^09(0[1-5]|1[0-9]|2[0-2]|3[0-9]|9[4|8|9])-?[0-9]{7}$/'),
            'password'=>'required|confirmed|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/',
            'newsletter'=>'sometimes|required',
        ];
    }
    public function messages()
    {
        return [
            'mobile.required'=>'شماره موبایل را وارد نمایید',
            'mobile.regex'=>'شماره موبایل خود را بصورت صحیح وارد نمایید',
            'password.required'=>'رمز عبور خودر ا وارد نماید',
            'password.regex'=>'رمز عبور باید 8 رقم ترکیبی از حروف بزرگ و کوچک باشد',
            'password.confirmed'=>'تکرار رمز عبور با رمز عبور شما همخوانی ندارد',
            'newsletter.required'=>'وضعیت عضویت در خبرنامه را انتخاب نمایید',
        ];
    }
}
