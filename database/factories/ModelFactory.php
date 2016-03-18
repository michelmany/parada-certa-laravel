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

$factory->define(ParadaCerta\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Michel Many',
        'email' => 'michel@nitdesign.com.br',
        'password' => bcrypt('nit1049'),
        'remember_token' => 'nit1049',
    ];
});


//$factory->define(ParadaCerta\Models\Matricula::class, function (Faker\Generator $faker) {
//    return [
//        'nome' => $faker->name,
//        'email' => $faker->email,
//        'cidade' => $faker->city,
//    ];
//});
//
//$factory->define(ParadaCerta\Models\Curso::class, function (Faker\Generator $faker) {
//    return [
//        'nome' => $faker->word,
//    ];
//});
