<?php
use Faker\Generator as Faker;
$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'content' => $faker->text(),
        'is_online' => $faker->boolean(),
    ];
});
