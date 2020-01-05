<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\MemoCategory\MemoCategoryEloquent;
use Faker\Generator as Faker;

$factory->define(MemoCategoryEloquent::class, function (Faker $faker) {
    return [
        'memo_id' => $faker->numberBetween(1, 32),
        'category_id' => $faker->numberBetween(1, 11)
    ];
});
