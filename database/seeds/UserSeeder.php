<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Adam',
            'email'    => 'adam@adam.com',
            'password' => bcrypt('123456789')
        ]);

        User::create([
            'name'     => 'Anna',
            'email'    => 'anna@anna.com',
            'password' => bcrypt('123456789')
        ]);

        User::create([
            'name'     => 'Lexa',
            'email'    => 'lexa@lexa.com',
            'password' => bcrypt('123456789')
        ]);

        User::create([
            'name'     => 'Filip',
            'email'    => 'filip@filip.com',
            'password' => bcrypt('123456789')
        ]);

        User::create([
            'name'     => 'Honza',
            'email'    => 'honza@honza.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
