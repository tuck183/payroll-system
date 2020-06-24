<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeesRequest extends FormRequest
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
            'fname' => 'required|max:250|min:2',
            'lname' => 'required|max:250|min:2',
            'gender' => 'required|max:100|min:4',
            'address' => 'required|max:100|min:4',
            'days_work' => 'required|max:100|min:4',
            'overtime_hrs' => 'required|max:100|min:4',
            'late' => 'required|max:100|min:4',
            'absences' => 'required|max:100|min:4',
            'positions_id' => 'required'
        ];
    }
}
