<?php

use Faker\Generator as Faker;

$factory->define(App\Listing::class, function (Faker $faker) {
    return [
        'user_id'   => rand(1,8),
        'name'      => $faker->name,
        'address'   => $faker->address,
        'website'   => $faker->domainName,
        'email'     => $faker->email,
        'phone'     => $faker->phoneNumber,
        'bio'       => $faker->sentence,
    ];
});
