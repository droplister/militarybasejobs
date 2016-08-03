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

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->name,
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
    ];
});

$factory->define(App\Facility::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->name,
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
    ];
});

$factory->define(App\GeoLocCode::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->name,
        'city' => $faker->name,
        'country' => $faker->name,
        'disabled' => $faker->name,
    ];
});

$factory->define(App\Listing::class, function (Faker\Generator $faker) {
    return [
        'category_id' => factory(Category::class)->create()->id,
        'organization_id' => factory(Organization::class)->create()->id,
        'c_number' => $faker->name,
        'a_number' => $faker->name,
        'name' => $faker->name,
        'url' => $faker->name,
        'summary' => $faker->name,
        'qualifications' => $faker->name,
        'open_to' => $faker->name,
        'open_to_code' => $faker->name,
        'schedule' => $faker->name,
        'schedule_code' => $faker->name,
        'position' => $faker->name,
        'position_code' => $faker->name,
        'job_grade' => $faker->name,
        'low_grade' => $faker->name,
        'high_grade' => $faker->name,
        'pay_type' => $faker->name,
        'min_pay' => $faker->name,
        'max_pay' => $faker->name,
        'published_at' => $faker->name,
        'ends_at' => $faker->name,

    ];
});

$factory->define(App\Location::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->name,
    ];
});

$factory->define(App\Organization::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
        'has_children' => 0,
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