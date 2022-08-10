<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
        $job = $this->route()->parameter('job');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:jobs',
            'status' => 'required|in:0,1',
            'file' => 'image',
            'banner' => 'image'
        ];

        if($job) {
            $rules['slug'] = 'required|unique:jobs,slug,' . $job->id;
        }

        if($this->status == 1) {
            $rules = array_merge($rules, [
                'category_id' => 'required',
                //'tags' => 'required',
                //'extract' => 'required',
                //'body' => 'required'
            ]);
        }

        return $rules;
    }
}
