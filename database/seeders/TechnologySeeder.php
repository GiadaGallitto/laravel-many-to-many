<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['HTML5', 'CSS3', 'SCSS', 'Bootstrap', 'Laravel', 'Python', 'JavaScript', 'PHP', 'Vue3', 'Java', 'Vite', 'Composer', 'NPM', 'Angular', 'C', 'React', 'HTML4', 'Node.js', 'Mysql', ];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->slug = Str::slug($technology);
            $newTechnology->color = $faker->unique()->colorName();
            $newTechnology->save();
            // $newTechnology->slug = $technology->slug . "-$tecnology->id";
            // $newTechnology->update();
        }
    }
}
