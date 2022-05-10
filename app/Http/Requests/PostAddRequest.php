<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAddRequest extends FormRequest
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
            'input_title' => 'bail|required|max:255|min:20',
            'input_topic' => 'required|unique:posts',
            'exampleInputFile' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'input_title.required' => 'Tiêu đề không được để trống',
            'input_title.max' => 'Tiêu đề không được quá 255 kí tự',
            'input_title.min' => 'Tiêu đề không được ngắn hơn 20 kí tự',
            'input_topic.required' => 'Danh mục không được để trống',
            'input_topic.unique:posts' => 'Chỉ được chọn 1 danh mục',
            'exampleInputFile.required' => 'Ảnh không được để trống',
        ];
    }
}
