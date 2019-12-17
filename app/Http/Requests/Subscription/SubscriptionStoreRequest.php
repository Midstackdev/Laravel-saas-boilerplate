<?php

namespace App\Http\Requests\Subscription;

use App\Rules\ValidStripeCoupon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubscriptionStoreRequest extends FormRequest
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
            'plan' => [
                'required',
                Rule::exists('plans', 'gateway_id')->where(function ($query) {
                    $query->where('active', true);
                })
            ],
            'token' => 'required',
            'coupon' => ['nullable', new ValidStripeCoupon()],
        ];
    }
}
