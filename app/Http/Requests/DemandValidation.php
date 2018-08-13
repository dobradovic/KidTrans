<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandValidation extends FormRequest
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
                'uvoz_izvoz' =>'required',
                'tip_prevoza' =>'required',
                'status' =>'required',
                'ime'=>'required',
                'firma' => 'required',
                'pb' =>'required',
                'mesto' =>'required',
                'drzava' =>'required',
                'telefon' => 'required',
                'email' =>'required|email',
                'ime_partnera_2' =>'required',
                'firma2' => 'required',
                'postanski_broj2' =>'required',
                'mesto2' =>'required',
                'drzava2' =>'required',
                'telefon2' => 'required',
                'email2' => 'required',
                'broj' => 'required',
                'vrsta_kolija' => 'required',
                'dimenzije' =>'required',
                'incoterm' =>'required',
                'mesto3' =>'required',



        ];
    }
}
