<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'teams' => 'required|array|size:8',
            'teams.*' => 'required|string|distinct|min:3|max:50'
        ];
    }

    public function messages()
    {
        return [
            'teams.size' => 'You must enter exactly 8 teams.',
            'teams.*.distinct' => 'Each team name must be unique.'
        ];
    }
}
