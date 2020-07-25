<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\GcTags\Models\TagType::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'type' => $faker->words(1, true)
    ];
});
