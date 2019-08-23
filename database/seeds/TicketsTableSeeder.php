<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create([
            'event_id' => 1,
            'name' => 'Ticket Test 1',
            'cost' => 100,
            'amount' => 100,
            'date' => '2019-08-24 06:00:00',
        ]);

        Ticket::create([
            'event_id' => 1,
            'name' => 'Ticket Test 2',
            'cost' => 200,
            'validity' => 'date',
            'amount' => 200,
            'date' => '2019-08-23 06:00:00',
        ]);

        Ticket::create([
            'event_id' => 1,
            'name' => 'Ticket Test 3',
            'cost' => 300,
            'validity' => 'amount',
            'amount' => 300,
            'date' => '2019-08-24 06:00:00',
        ]);
    }
}
