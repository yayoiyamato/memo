<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Memo\MemoEloquent;
use Faker\Generator as Faker;

$factory->define(MemoEloquent::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 15, $indexSize = 1),
        'type' => $faker->randomElement(array('md', 'sn')),
        'text' => $faker->realText($faker->numberBetween(200, 400)),
        'is_show' => $faker->numberBetween(0, 1),
    ];
});
