<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestMaterialUpdate extends FormRequest
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
            'name' => 'required|max:191',
            'amount' => 'required|numeric',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống ! ',
            'name.unique' => 'Tên sản phẩm đã tồn tại ! ',
            'name.max' => 'Tên sản phẩm không được vượt quá :max ký tự ! ',
            'price.required'  => 'Vui lòng nhập giá bán',
            'price.numeric'  => 'Sai định dạng giá bán',
            'weight.required'  => 'Vui lòng nhập định lượng',
            'weight.numeric'  => 'Sai định dạng',
        ];
    }
}
