<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => "Arev",
            'last_name' => "Arevyan",
            'email' => "arev@gmail.com",
            'password' => Hash::make("as1234")
        ]);
    }
}
