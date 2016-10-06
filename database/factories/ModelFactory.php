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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// fabrica de disciplinas
$factory->define(App\Disciplina::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'nome' => $faker->word(),
        'referenciaBasica' => $faker->sentence(),
        'referenciaComplementar' => $faker->sentence(),
        'ementa' => $faker->sentence(),
        'cargaHoraria' => $faker->numberBetween(20,40),
        'aulasTeoricas' => $faker->numberBetween(20,40),
        'aulasPraticas' => $faker->numberBetween(20,40),
        'aulasLaboratorio' => $faker->numberBetween(20,40),
        'curso_id' => 1
    ];
});

// fabrica de recursos
$factory->define(App\Recurso::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'nome' => $faker->word(),
    ];
});

// fabrica de recursos
$factory->define(App\Tecnica::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'nome' => $faker->word(),
    ];
});

// fabrica de Avaliação
$factory->define(App\Avaliacao::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'nome' => $faker->word(),
        'peso' => $faker->numberBetween(1,4),
        'notaMax' => $faker->numberBetween(1,7),
        'plano_id' => 1
    ];
});

// fabrica de Plano
$factory->define(App\Plano::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        
        'objetivoEspecifico' => $faker->sentence(),
        'objetivoGeral' => $faker->sentence(),
        'ano' => 2016,
        'semestre' => 4,
        'fimDisciplina' => '2017-2-18',
        'disciplina_id' => 1,
        'professor_id' => 1
        
    ];
});