<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTiketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'keterangan' => 'required',
            'harga' => 'required|numeric',
            'kendaraan_uuid' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'keterangan.required' => 'Keterangan harus diisi',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa angka',
            'kendaraan_uuid.required' => 'Jenis kendaraan harus diisi',
        ];
    }
}