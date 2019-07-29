<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiCreateRequest extends FormRequest
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
     * Ràng buộc phía Serve
     *
     * @return array
     */
    public function rules()
    {
        return [
            'l_ten' => 'unique:loai'
        ];
    }

    public function messages(){
        return [
            'l_ten.unique'  => 'Tên loại đã tồn tại. Vui lòng nhập tên loại khác.',
        ];
    }
}
