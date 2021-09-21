<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name'=>$faker->word(2),
        'details'=>$faker->paragraph(2),
        'completed'=>false
    ];
});
