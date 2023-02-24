<?php

namespace Database\Seeders;

use App\Models\Biere;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create('fr_FR');
        $bieres_ids = Biere::all('id')->pluck('id')->toArray();
        $users_ids = User::all('id')->pluck('id')->toArray();
        foreach ($bieres_ids as $biere_id) {
            DB::table('bieres')
                ->where('id', $biere_id)
                ->update(['user_id' => $faker->randomElement($array = $users_ids)]);
        }
    }
}
