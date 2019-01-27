<?php

use Illuminate\Database\Seeder;
use App\User;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyName = "First company";


        $company = App\Company::create([
            'name' => $companyName,
            'user_id' => User::all()->random()->id,
            'size' => "11-20",
            'slug' => str_slug($companyName),
        ]);
    }
}
