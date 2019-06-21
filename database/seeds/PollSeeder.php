<?php

use Illuminate\Database\Seeder;
use App\Poll;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poll::create([
            'Question'     => 'Jaké chcete počasí?'
        ]);
    }
}
