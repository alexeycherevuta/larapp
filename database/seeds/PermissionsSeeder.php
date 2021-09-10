<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'create-articles',
            'edit-articles',
            'delete-articles'
        ];
        $role = Role::findByName('admin');
        foreach ($permissions as $permission){
            $newPermissions = Permission::create(['name' => $permission]);
            $this->command->info("[Permission #{$newPermissions->id}] Permission {$newPermissions->name} created.");
            $role->givePermissionTo($permission);
            $this->command->info("[Permission #{$newPermissions->id}] Added to {$role->name} .");
        }
    }
}
