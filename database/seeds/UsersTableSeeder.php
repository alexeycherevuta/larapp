<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
