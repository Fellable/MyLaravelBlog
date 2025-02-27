<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'technology' => 'nullable|string',
            'additional_tech' => 'nullable | string',
            'gitHub' => 'nullable | string',
            'queuery' => 'nullable | integer',
            'category_id' => 'required| integer |exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable | integer| exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения.',
            'title.string' => 'Данные должны соответствовать строчному типу.',
            'content.required' => 'Это поле необходимо для заполнения.',
            'content.string' => 'Данные должны соответствовать строчному типу.',
            'preview_image.required' => 'Это поле необходимо для заполнения.',
            'preview_image.file' => 'Необходимо выбрать файл.',
            'main_image.required' => 'Это поле необходимо для заполнения.',
            'main_image.file' => 'Необходимо выбрать файл.',
            'technology.string' => 'Данные должны соответствовать строчному типу.',
            'additional_tech.string' => 'Данные должны соответствовать строчному типу.',
            'gitHub.string' => 'Данные должны соответствовать строчному типу.',
            'queuery.integer' => 'Данные должны быть числом',
            'category_id.required' => 'Это поле необходимо для заполнения.',
            'category_id.integer' => 'ID категории должен быть числом.',
            'category_id.exists' => 'ID категории должен быть в базе данных.',
            'tag_ids.array' => 'Необходимо отправить массив данных.',

        ];
    }
}
