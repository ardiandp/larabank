<?php

namespace Database\Seeders;
use App\Models\Bank;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BankSeeder extends Seeder
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
        for ($i=1; $i<=12; $i++)
        {

        $bank = [

        	[
        	'tanggal'=> $faker->dateTimeThisCentury()->format('Y-m-d'),
       		'keterangan'=> $faker->name,
        	'cabang'=>  $faker->address,
            'status'=> $faker->numberBetween(1,2),
        	'jumlah'=> $faker->numberBetween(100000,15000000),
       		'saldo'=> $faker->numberBetween(100000,15000000),
        	
        	],        	
        ];
 		\DB::table('bank')->insert($bank);


        }
    }
}
