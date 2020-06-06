<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class ProjectInvitationRequest extends FormRequest
{
    protected $errorBag = 'invitations';

    public function authorize()
    {
        return Gate::allows('manage', $this->route('project'));
    }

    public function rules()
    {
        return [
            'email' => ['required', Rule::exists('users', 'email')]
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'The user you are inviting must have a Birdboard account.'
        ];
    }
}
