<?php

use App\Models\Veiculo;
use Faker\Generator as Faker;

function generateRandomString($length = 7) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';

    $charactersLength = strlen($characters);
    $numbersLength = strlen($numbers);

    $randomString = '';
    $randomNumbers = '';

    for ($i = 0; $i < $length - 4; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    for($i = 0; $i < $length - 3; $i++) {
        $randomNumbers .= $numbers[rand(0, $numbersLength - 1)];
    }

    return $randomString . $randomNumbers;
}

$factory->define(Veiculo::class, function (Faker $faker) {
    return [
        'placa'         => generateRandomString(),
        'renavam'       => $faker->unique()->numberBetween($max = 99999999999),
        'modelo'        => $faker->text(10),
        'marca'         => $faker->text(10),
        'ano'           => $faker->date('Y'),
        'proprietario'  => $faker->name
    ];
});