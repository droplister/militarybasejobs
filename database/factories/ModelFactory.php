<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\GeoLocCode::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->name,
        'city' => $faker->name,
        'country' => $faker->name,
        'disabled' => $faker->name,
    ];
});

$factory->define(App\Department::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Facility::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->name,
        'name' => $faker->name,
    ];
});

$factory->define(App\Filter::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->name,
    ];
});

$factory->define(App\Listing::class, function (Faker\Generator $faker) {
    return [
        'organization_id' => factory(Department::class)->create()->id,
        'identifier' => $faker->name,
        'announcement' => $faker->name,
        'name' => $faker->name,
        'url' => $faker->name,
        'summary' => $faker->name,
        'qualifications' => $faker->name,
        'low_grade' => $faker->name,
        'high_grade' => $faker->name,
        'min_pay' => $faker->name,
        'max_pay' => $faker->name,
        'pay_interval' => $faker->name,
        'published_at' => $faker->name,
        'ends_at' => $faker->name,

    ];
});

$factory->define(App\Location::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->name,
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});