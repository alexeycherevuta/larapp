<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'admin' => [
                'create-articles',
                'edit-articles',
                'delete-articles',
                'create-roles',
                'delete-roles',
                'create-permissions',
                'delete-permissions',
                'set-permission',
                'set-roles'
            ],
            'subscriber' => [
                'create-articles',
                'edit-articles',
                'delete-articles',
            ]
        ];
        $role = Role::findByName('admin');
        foreach ($permissions['admin'] as $permission){
            $newPermissions = Permission::create(['name' => $permission]);
            $this->command->info("[Permission #{$newPermissions->name}] created.");
            $role->givePermissionTo($permission);
            $this->command->info("[Permission #{$newPermissions->name}] Added to {$role->name} .");
        }
        $role = Role::findByName('subscriber');
        foreach ($permissions['subscriber'] as $permission){
            $role->givePermissionTo($permission);
            $this->command->info("[Permission #{$permission}] Added to {$role->name} .");
        }
    }
}
