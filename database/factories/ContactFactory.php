<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {


	//$user = App\User::first();
    return [
       // 'user_id' => 2,
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'phone' => $faker->numerify('(###) ###-####'),
        'email' => $faker->email()
    ];
});
