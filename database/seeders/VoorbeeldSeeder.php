<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VoorbeeldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // maak een faker helper aan om fake tekst in te voegen
        // $faker = Factory::create();

        // vul de verschilledne elementen van het model.
        // velden die jij zelf hebt bedacht maar hier niet staan zul je moeten toevoegen
        DB::table('projects')->insert([
            'titel'         => 'andere titel',
            'description'   => 'Do aute dolore eiusmod consequat enim labore eu. Dolore eiusmod, consequat enim labore eu sed. Enim labore eu, sed. Sed esse incididunt aute velit. Incididunt, aute velit duis amet sint. Duis amet sint pariatur esse anim officia mollit. Sint pariatur esse anim. Esse anim officia mollit laboris aliqua, et esse. Mollit laboris aliqua et esse do nostrud. Aliqua, et esse do nostrud velit consequat.',
            'active'        => true,
        ]);

        DB::table('projects')->insert([
            'titel'         => 'Mijn project titel',
            'description'   => 'Enim labore eu, sed. Sed esse incididunt aute velit. Incididunt, aute velit duis amet sint. Duis amet sint pariatur esse anim officia mollit. Sint pariatur esse anim. Esse anim officia mollit laboris aliqua, et esse.',
            'active'        => true,
        ]);
    }
}
