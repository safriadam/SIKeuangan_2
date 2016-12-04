<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\pemasukan;

class createPemasukan extends Request
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

            'tanggal_transaksi'     =>'required',
            'deskripsi'             =>'required',
            'pemasukan'             =>'required',
            'jenis_pema'            =>'required',
        ];
    }
}
