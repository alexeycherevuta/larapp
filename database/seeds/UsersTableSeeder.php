<?php
use App\User;
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'     => 'cilia',
                'email'    => 'cecilia@crtx.tech',
                'password' => 'zebulon',
            ],
            [
                'name'     => 'Sp33dy',
                'email'    => 'erwarkreutz@gmail.com',
                'password' => 'zebulon',
            ],
            [
                'name'     => 'tr0ll',
                'email'    => 'pichot.vincent@gmail.com',
                'password' => 'zebulon',
            ],
        ];
        foreach ($users as $user) {
            $newUser = User::create($user);
            $this->command->info("[User #{$newUser->id}] User created with name: {$newUser->name} | email: {$newUser->email} | pwd: {$newUser->password}");
            $newUser->assignRole('admin');
            $this->command->info("[User #{$newUser->id}] User assigned to role admin");
        }
    }
}
