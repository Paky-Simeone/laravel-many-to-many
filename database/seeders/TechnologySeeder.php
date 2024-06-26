<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technology_names = ['HTML', 'CSS', 'BOOTSRTAP', 'SASS', 'JAVASCRIPT', 'VUEJS', 'NODEJS', 'LARAVEL', 'PHP', 'BLADE'];

        foreach ($technology_names as $_technology) {
            $technology = new Technology;
            $technology->label = $_technology;
            $technology->color = $faker->hexColor();
            $technology->save();
        }
    }
}
