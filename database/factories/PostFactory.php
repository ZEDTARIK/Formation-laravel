<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->realText(10);
    return [
        'title' => $title,
        'slug' => Str::slug($title, '-'),
        'body' => $faker->realText(50),
        'active' => $faker->boolean
    ];
});
