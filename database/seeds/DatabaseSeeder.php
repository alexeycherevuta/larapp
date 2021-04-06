<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
