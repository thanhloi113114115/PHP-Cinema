<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNhaCungCapRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ma_so_thue'            =>  'nullable|unique:nha_cung_caps,ma_so_thue',
            'ten_cong_ty'           =>  'nullable|min:5',
            'ten_nguoi_dai_dien'    =>  'required|min:5',
            'so_dien_thoai'         =>  'required|digits:10',
            'email'                 =>  'required|email',
            'dia_chi'               =>   'required|min:5|max:100',
            'ten_goi_nho'           =>   'required|min:5|max:100',
        ];
    }

    public function messages()
    {
        return [

            'ten_cong_ty.*'           => 'Tên Công Ty ít nhất phải 5 kí tự',
            'ten_nguoi_dai_dien.*'    => 'Tên Người Đại diện ít nhất 5 kí tự !',
            'so_dien_thoai.*'         =>  'Số điện thoại chỉ được 10 số!',
            'email.*'                 =>  'Email không đúng định dạng hoặc đã tồn tại!',
            'dia_chi.*'               => 'Địa Chỉ ít nhất phải 5 kí tự',
            'ten_goi_nho.*'           => 'Tên Gợi Nhớ ít nhất phải 5 kí tự',
        ];
    }
}
