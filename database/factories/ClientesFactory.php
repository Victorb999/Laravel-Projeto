<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        //
        'nome' => $faker->name,
        'dataUltDocumento' => now(),
        'dataStatus' => now(),
        'numDocumento' => rand(5, 10),
        'status'=> $faker->randomElement(['aprovado','reprovado','pendente'])
    ];
});
