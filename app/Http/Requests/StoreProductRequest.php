<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Str;

class StoreProductRequest extends FormRequest
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
        $this->slug = Str::slug($this->name);

        return [
            'name' => 'required|max:90|unique:products',
            'slug' => 'max:255|unique:products',
            'content' => 'required',
            'price' => 'numeric',
            'sale_price' => 'numeric',
            'share_price' => 'numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ];
    }
}
