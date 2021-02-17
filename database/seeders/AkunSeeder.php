<?php

namespace Database\Seeders;
use App\Models\Akun;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $faker = Faker::create('id_ID');
        //
    	 for ($i=1; $i<=20; $i++)
    	 {


        $akun= [
        	[
        		'situs' => $faker->safeEmail,
        		'username' =>$faker->userName,
        		'password' =>$faker->phoneNumber,
        	],
        ];
        \DB::table('akun')->insert($akun);
         }
    }
}
