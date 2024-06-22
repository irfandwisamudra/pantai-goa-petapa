<?php

// TODO: Add documentation

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePengunjungRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
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
            // 'email' => 'required_if:tipe,user|email',
            // 'password' => 'required_if:tipe,user|min:8',
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
            'password.required_if' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'no_telepon.required' => 'Nomor telepon harus diisi'
        ];
    }
}
