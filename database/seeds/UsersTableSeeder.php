<?php
use App\User;
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $pwd = 'zebulon';
        $users = [
            [
                'name'     => 'cilia',
                'email'    => 'cecilia@crtx.tech',
                'password' => bcrypt($pwd),
            ],
            [
                'name'     => 'Sp33dy',
                'email'    => 'erwarkreutz@gmail.com',
                'password' => bcrypt($pwd),
            ],
            [
                'name'     => 'tr0ll',
                'email'    => 'pichot.vincent@gmail.com',
                'password' => bcrypt($pwd),
            ],
        ];
        foreach ($users as $user) {
            $newUser = User::create($user);
            $this->command->info("[User #{$newUser->id}] User created with name: {$newUser->name} | email: {$newUser->email} | pwd: {$pwd}");
            $newUser->assignRole('admin');
            $this->command->info("[User #{$newUser->id}] User assigned to role admin");
        }
    }
}
