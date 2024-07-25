<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'common_name' => 'required | min:2 | max:100 | string ',
            'scientific_name' => 'required | min:2 | max:100 | string ',
            'class' => 'required | min:2 | max:100 | string ',
            'habitat' => 'required | min:2 | max:100 | string ',
            'class' => 'required | min:2 | max:100 | string ',
            'geographical_distribution' => 'required | min:2 | max:100 | string ',
            ' high_max ' => 'required | min:1 | max:32000 | integer ',
            ' weigh_max ' => 'required | min:1 | max:32000 | integer ',
            'image_url' => 'nullable | url ',
            'note' => 'required | max:500 | string '
        ];


    }

    public function messages()
    {
        return [
            'common_name.min' => 'YOU MUST PUT more THAN 2 CHARACTERS INTO common name FIELD',
            'common_name.max' => 'YOU MUST PUT less THAN 100 CHARACTERS INTO common name FIELD',
            'common_name.required' => 'YOU MUST insert A  common name FOR THE ANIMAL INTO common name FIELD',


            'scientific_name.min' => 'YOU MUST PUT more THAN 2 CHARACTERS INTO scientific name',
            'scientific_name.max' => 'YOU MUST PUT less THAN 100 CHARACTERS INTO scientific name',
            'scientific_name.required' => 'YOU MUST insert A  scientific name FOR THE ANIMAL INTO scietific name FIELD',


            'class.min' => 'YOU MUST PUT more THAN 2 CHARACTERS INTO class FIELD',
            'class.max' => 'YOU MUST PUT less THAN 100 CHARACTERS INTO class FIELD',
            'class.required' => 'YOU MUST insert A class FOR THE ANIMAL INTO class FIELD',


            'habitat.min' => 'YOU MUST PUT more THAN 2 CHARACTERS INTO habitat FIELD',
            'habitat.max' => 'YOU MUST PUT less THAN 100 CHARACTERS INTO habitat FIELD',
            'habitat.required' => 'YOU MUST insert A habitat FOR THE ANIMAL INTO habitat FIELD',
        ];
    }
}
