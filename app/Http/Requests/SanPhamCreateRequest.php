<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamCreateRequest extends FormRequest
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
            'sp_ten' => 'required|min:3|max:50|unique:sanpham',
            'sp_gia' => 'required',
            'sp_giamGia' => 'required',
            'sp_mota' => 'min:10',
        ];
    }

    public function messages()
    {
        return [
            'sp_ten.required' => 'Vui lòng nhập tên sản phẩm',
            'sp_ten.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
            'sp_ten.max' => "Tên sản phẩm không được vượt quá 50 ký tự",
            'sp_ten.unique' => "Tên sản phẩm đã tồn tại. Xin vui lòng nhập lại!",
            'sp_gia.required' => "Vui lòng nhập giá của sản phẩm",
            'sp_giamGia.required' => "Vui lòng nhập giá giảm của sản phẩm",
            'sp_mota.min' => "Mô tả ít nhất là 10 kí tự.",
        ];
    }
}
