<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        /*return [
            'name'      => 'required | min:2 | max:64',
            'title_job' => 'required | min:2 | max:32',
            'address'   => 'min:10 | max:100',
            'tel'       => 'required | numeric | min:10',
            'email'     => 'required | email | min:5 | max:100',
            'file'      => 'image:jpg | image:png | image:jpeg | max:5000'
        ];*/
    }
}
