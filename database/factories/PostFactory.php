<?php
use Faker\Generator as Faker;
$factory->define(\App\Post::class, function (Faker $faker) {
    $title = $faker->title();
    return [
        'title'     => $title,
        'content'   => $faker->text(),
        'is_online' => $faker->boolean(),
        'slug'      => str_slug($title),
    ];
});
