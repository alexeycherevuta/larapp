<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Role;
class RoleForm extends FormRequest
{
    public function authorize()
    {
        return auth()->user()->can('create-roles');
    }
    public function rules()
    {
        return [
            'name' => 'required|min:2'
        ];
    }
    public function persist()
    {
        Role::create(
            $this->only(['name'])
        );
    }
}
