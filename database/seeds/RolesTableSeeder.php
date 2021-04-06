\App<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RolesTableSeeder extends Seeder
{
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        $roles = [
            'admin',
            'subscriber',
        ];
        foreach ($roles as $role) {
            $newRole = Role::create(['name' => $role]);
            $this->command->info("[Role #{$newRole->id}] Role {$newRole->name} created.");
        }
    }
}
