<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\GcTags\Models\Tag::class, function (Faker $faker) {
    return [
        'tag_type_id' => \Goodechilde\GcTags\Models\TagType::inRandomOrder()->first(),
    ];
});
