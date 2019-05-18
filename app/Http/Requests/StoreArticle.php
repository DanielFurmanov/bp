<?php

namespace App\Http\Requests;

use App\Models\Article;
use App\Models\ArticleCategory;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
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
            'title' => 'unique:'.Article::getTableName().'|required',
            'slug' => 'required|alpha_dash',
            'category' => 'required|exists:'.ArticleCategory::class.'',
            'content' => 'required',
            'annotation' => 'required|',
        ];
    }
}
