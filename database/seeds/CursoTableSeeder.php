<?php

use Illuminate\Database\Seeder;
use App\Curso;
use Faker\Factory as Faker;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->truncate();


        // depois de importar o meu faker

        $faker = Faker::create();
        foreach (range(1,10) as $i) {

            Curso::create([
                'nome' => $faker->word(),
                'periodo' => $faker->numberBetween(0,10)
            ]);

        }

    }
}
