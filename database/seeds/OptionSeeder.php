<?php

use Illuminate\Database\Seeder;
use App\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::create([
            'Answer'     => 'Sluníčko',
            'votes'    => 0,
            'poll_id' => 1
        ]);

        Option::create([
            'Answer'     => 'Zataženo',
            'votes'    => 0,
            'poll_id' => 1
        ]);

        Option::create([
            'Answer'     => 'Déšť',
            'votes'    => 0,
            'poll_id' => 1
        ]);
        
        Option::create([
            'Answer'     => 'Sníh',
            'votes'    => 0,
            'poll_id' => 1
        ]);
    }
}
