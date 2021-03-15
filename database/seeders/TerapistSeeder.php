<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; 
class TerapistSeeder extends Seeder
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
        DB::table('terapist')->insert([
            'nip' =>$faker->numberBetween(2020001,2020999),
            'nama_terapist' => $faker->name,
            'alamat' => $faker->address,
            'no_hp' => $faker->phoneNumber,
            'no_rekening' => $faker->creditCardNumber,
        ]);
    }
    }
}
