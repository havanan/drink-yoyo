<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProductCreate extends FormRequest
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
            'name' => 'required|unique:products|max:191',
            'type_id' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống ! ',
            'name.unique' => 'Tên sản phẩm đã tồn tại ! ',
            'name.max' => 'Tên sản phẩm không được vượt quá :max ký tự ! ',
            'type_id.required'  => 'Vui lòng chọn loại sản phẩm',
            'type_id.numeric'  => 'sai định dạng loại sản phẩm',
            'price.required'  => 'Vui lòng nhập giá bán',
            'price.numeric'  => 'sai định dạng giá bán',
        ];
    }
}
