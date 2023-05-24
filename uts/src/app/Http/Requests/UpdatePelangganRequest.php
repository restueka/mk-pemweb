<?php

namespace App\Http\Requests;

use App\Models\Book;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBookRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pelanggan_edit');
    }

    public function rules()
    {
        return [
            'pelangganname' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'nomor_pelanggan' => [
                'string',
                'required',
            ],
            'umur_pelanggan' => [
                'string',
                'required',
            ],
            'jenis_kelamin' => [
                'string',
                'required',
            ],
            'alamat' => [
                'string',
                'required',
        ];
    }
}

