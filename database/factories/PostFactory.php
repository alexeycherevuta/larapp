<?php
use Faker\Generator as Faker;
$factory->define(\App\Post::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        'title'     => $title,
        'content'   => $faker->text(),
        'is_online' => $faker->boolean(),
        'slug'      => str_slug($title),
        'user_id'   => random_int(1, 3),
    ];
});
