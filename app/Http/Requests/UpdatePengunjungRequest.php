<?php

// TODO: Add documentation

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePengunjungRequest extends FormRequest
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
            'nama' => 'required',
            'tipe' => 'required',
            'email' => 'required_if:tipe,user|email',
            'no_telepon' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'tipe.required' => 'Tipe harus diisi',
            'email.required_if' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'no_telepon.required' => 'Nomor telepon harus diisi'
        ];
    }
}
