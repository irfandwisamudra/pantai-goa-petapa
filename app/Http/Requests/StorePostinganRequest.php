<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostinganRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (auth()->guard('web-admin')->check()) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required|string',
            'thumbnail' => 'required|image|max:2048',
            'body' => 'required',
            'kategori_uuid' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul harus diisi!',
            'judul.string' => 'Judul harus berupa string!',
            'thumbnail.required' => 'Thumbnail harus diisi!',
            'thumbnail.image' => 'Thumbnail harus berupa gambar!',
            'thumbnail.max' => 'Ukuran thumbnail maksimal 2MB!',
            'thumbnail.max' => 'Ukuran thumbnail maksimal 2MB!',
            'body.required' => 'Body harus diisi!',
            'kategori_uuid' => 'Kategori harus diisi!'
        ];
    }
}
