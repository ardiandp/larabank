<?php

namespace Database\Seeders;
use App\Models\Rekening;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; 
class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for($i=1; $i <=12; $i++)
        {
            DB::table('rekening')->insert([
                'atas_nama' => $faker->name,
                'alias' => $faker->name,
                'norek' => $faker->creditCardNumber,
                'bank' =>$faker->numberBetween(111,110),
            ]);

    }
    }
}
