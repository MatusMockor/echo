<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameResultRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'team_id'     => 'required',
            'our_name'    => 'string',
            'our_score'   => 'required|integer',
            'enemy_name'  => 'required|string',
            'enemy_score' => 'required|integer',
            'mvp_player'  => 'required|string',
        ];
    }
}
