<?php

namespace App\Http\Requests;

use App\Models\City;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreMeeting extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check(); // todo probably allow only admin access or something
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => 'required',
            'city_id' => 'required|exists:'.City::getTableName().',id',
            'address' => 'required',
            'date_start' => 'required',
            'time_start' => 'filled',
            'date_end' => 'required|after_or_equal:date_start',
            'time_end' => 'filled',
        ];
    }
}
