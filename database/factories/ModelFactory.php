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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Chamada::class, function (Faker\Generator $faker) {

    return [
        'numero_de_origem' => $faker->tollFreePhoneNumber,
        'numero_de_destino' => $faker->tollFreePhoneNumber,
        'tempo_da_ligacao' => $faker->time($format = 'H:i:s'),
        'data_e_hora_da_ligacao' => $faker->dateTime(),
        'comentario' => $faker->sentence($nbWords = 6)
    ];
});
$factory->define(App\Models\Configuracao::class, function (Faker\Generator $faker) {
    return [
        'custo_do_minuto'=> 1.1
    ];
});
