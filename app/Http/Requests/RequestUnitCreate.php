<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUnitCreate extends FormRequest
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
            //
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'required|unique:materials|max:191',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên đơn vị không được để trống ! ',
            'name.unique' => 'Tên đơn vị đã tồn tại ! ',
            'name.max' => 'Tên đơn vị không được vượt quá :max ký tự ! ',
        ];
    }
}
