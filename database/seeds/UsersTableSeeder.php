<?php

use Illuminate\Database\Seeder;

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
            'password' => bcrypt("as1234"),
        ]);
    }
}
