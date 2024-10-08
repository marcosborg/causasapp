<?php

namespace App\Http\Requests;

use App\Models\Payment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePaymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_create');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
                'integer',
            ],
            'total' => [
                'required',
            ],
            'type' => [
                'string',
                'required',
            ],
            'entity_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
