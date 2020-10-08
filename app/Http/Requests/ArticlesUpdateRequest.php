<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;



class ArticlesUpdateRequest extends ApiRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'article_id' => 'required|integer|exists:articles,id',
            'title' => 'required|min:5',
            'body' => 'required|min:5',
        ];
    }

}
