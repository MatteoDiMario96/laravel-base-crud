<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Animals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $animalsData = Helpers::getCsvInfo(__DIR__ . '/../../resources/assets/animal_data.csv');
        // foreach ($animalsData as $index => $animal) {
        //     if ($index > 0) {
        //         $newAnimal = new Animals();
        //         $newAnimal->common_name = $animal[1];
        //         $newAnimal->scientific_name = $animal[2];
        //         $newAnimal->class = $animal[3];
        //         $newAnimal->habitat = $animal[4];
        //         $newAnimal->geographical_distribution = $animal[5];
        //         $newAnimal->high_max = $animal[6];
        //         $newAnimal->weigh_max = $animal[7];
        //         $newAnimal->note = $animal[8];
        //         $newAnimal->save();
        //     }
        // }

        for ($i=0; $i < 50; $i++) {
            $newAnimal = new Animals();
            $newAnimal->common_name = $faker->name();
            $newAnimal->scientific_name = $faker->firstName();
            $newAnimal->class = $faker->word();
            $newAnimal->habitat = implode(' ', $faker->words(3));
            $newAnimal->geographical_distribution = implode(' ', $faker->words(4));
            $newAnimal->high_max = $faker->numberBetween(0, 200);
            $newAnimal->weigh_max = $faker->numberBetween(0, 150);
            $newAnimal->note = implode(' ', $faker->words(10));
            $newAnimal->save();
        }
    }
}

