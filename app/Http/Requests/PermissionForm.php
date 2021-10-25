<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Permission;
class PermissionForm extends FormRequest
{
    public function authorize()
    {
        if (auth()->user()->can('create-permissions')) {
            return true;
        } else {
            return false;
        }
    }
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
    public function persist()
    {
        Permission::create(
            $this->only(['name'])
        );
    }
}
