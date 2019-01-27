<?php

use Illuminate\Database\Seeder;
use App\EmployeeType;
use App\Company;


class EmployeeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\EmployeeType::create([
            'name' => "Full-time",
        ]);
        App\EmployeeType::create([
            'name' => "Part-time",
        ]);
        App\EmployeeType::create([
            'name' => "Other type 1",
            'company_id' => Company::all()->random()->id,
        ]);
        App\EmployeeType::create([
            'name' => "Other type 2",
            'company_id' => Company::all()->random()->id,
        ]);
        App\EmployeeType::create([
            'name' => "Other type 3",
            'company_id' => Company::all()->random()->id,
        ]);
    }
}
