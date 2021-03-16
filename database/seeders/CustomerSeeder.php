<?php

namespace Database\Seeders;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
class CustomerSeeder extends Seeder
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
        DB::table('customer')->insert([
            'idcustomer' => $faker->numberBetween(1000,9999),
            'nama_customer' => $faker->name,
            'no_hp'=>$faker->phoneNumber,
            'alamat' => $faker->address,
        ]);
    }
    }
}
