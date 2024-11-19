<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typeIds = Type::all()->pluck('id'); //prendo tutti i types

        $projectNames = [
            'boolflix',
            'boolando',
            'boolzap',
            'db_university',
            'hello_world',
            'vite-boolflix',
            'vite-comics',
            'vite-yu-gi-oh',
            'html-london-trip',
            'js-biglietto-treno',
            'js-simon',
            'php-hotel',
            'laravel-api',
            'laravel-comics',
            'js-our-team',
            'js-fizzbuzzdom',
            'vue-todolist',
            'db-university',
            'html-css-boolando',
            'js-paliedispari',
            'php-badwords',
            'htmlcss-discord',
            'db-first',
            'htmlcss-shoes',
            'vue-email-list',
            'html-css-flukeout',
        ];
        foreach ($projectNames as $name) {
            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($typeIds);
            $newProject->name = $name;
            $newProject->save();

        }
    }
}
