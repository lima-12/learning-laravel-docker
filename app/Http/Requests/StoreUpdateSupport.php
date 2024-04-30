<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupport extends FormRequest
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
        $rules = [
            "subject" => [
                "required", 
                "min:3", 
                "max:255", 
                "unique:supports"
            ],
            "body" => [
                "required",
                "min:3",
                "max:10000"
            ]
        ];

        /**
         * quando eu for editar, permite que o assunto se mantenha
         * ele é unico na tabela supports mas pode ignorar se o id for o mesmo
         */
        if ($this->method() === 'PUT') {
            $rules["subject"] = [
                "required", 
                "min:3", 
                "max:255", 
                // "unique:supports,subject,{$this->id}, id}"
                Rule::unique("supports")->ignore($this->id), 
            ];
        }

        return $rules;
    }
}
