<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<6; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->word();
            $newTrain->stazione_di_arrivo = $faker->word();
            $newTrain->orario_di_partenza = $faker->time('H:i');
            $newTrain->orario_di_arrivo = $faker->time('H:i');
            $newTrain->codice_treno= $faker->randomNumber(5, false);
            $newTrain->numero_carrozze = $faker->numberBetween(20, 50);
            $newTrain->in_orario = $faker->randomElement([true,false]);
            $newTrain->cancellato = $faker->randomElement([true,false]);
            $newTrain->save();
        }
    }
}
