<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
           'idpengguna' => ['required', "max:20"],
           'nama' => ['required', 'min:3', "max:20"],
           'alamat' => ['required', 'min:3', "max:20"],
           'telp' => ['required', 'min:3', "max:20"],
           'idproduk' => ['required', "max:20"],
           'produk' => ['required', 'min:3', "max:20"],
           'harga' => ['required', 'min:3', "max:20"],
           'kategori' => ['required', 'min:3', "max:20"]
        
        ];
    }
}

?>