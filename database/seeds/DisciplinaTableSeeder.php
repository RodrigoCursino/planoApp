<?php

use Illuminate\Database\Seeder;
use App\Disciplina;
use Faker\Factory as Faker;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->truncate();

        $faker = Faker::create();

        foreach (range(1,10) as $i){

            Disciplina::create([

                'nome' => $faker->word(),
                'referenciaBasica' => $faker->sentence(),
                'referenciaComplementar' => $faker->sentence(),
                'ementa' => $faker->sentence(),
                'cargaHoraria' => $faker->numberBetween(20,40),
                'aulasTeoricas' => $faker->numberBetween(20,40),
                'aulasPraticas' => $faker->numberBetween(20,40),
                'aulasLaboratorio' => $faker->numberBetween(20,40)

            ]);

        }
    }
}
