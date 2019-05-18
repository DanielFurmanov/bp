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
            'date_start' => 'required|date|after:today',
            'time_start' => 'nullable|date_format:H:i',
            'date_end' => 'required|date|after_or_equal:date_start',
            'time_end' => 'nullable|date_format:H:i',
        ];
    }

    public function attributes()
    {
        return [
            'date_start' => 'Дата начала',
            'time_start' => 'Время начала',
            'date_end' => 'Дата окончания',
            'time_end' => 'Время окончания',
        ];
    }
}
