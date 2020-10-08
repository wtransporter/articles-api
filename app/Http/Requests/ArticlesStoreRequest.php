<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;

class ArticlesStoreRequest extends ApiRequest
{

    public function rules()
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|min:5',
            'body' => 'required|min:5',
        ];
    }

}
