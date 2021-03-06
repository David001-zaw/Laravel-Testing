<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            'name' => 'required|unique:games,name',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'အမည်ထည့်ရန်လိုအပ်ပါသည်။',
            'name.unique' => 'ထိုအမည် ရှိထားပြီးဖြစ်ပါသည်။',
            'price.required' => 'ဈေးနှုန်းထည့်ရန်လိုအပ်ပါသည်။'
        ];
    }
}
