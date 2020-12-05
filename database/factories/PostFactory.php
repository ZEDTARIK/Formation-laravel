<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $body = $faker->realText(50);
    return [
        'title' => $faker->realText(15),
        'body' => $body,
        'slug' => Str::slug($body, '-'),
        'active' => $faker->boolean
    ];
});
