<?php

use Illuminate\Database\Seeder;
use App\UserPoll;

class UserPollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPoll::create([
            'user_id'     => 1,
            'poll_id'    => 1,
            'is_owner' => 1
        ]);
    }
}
