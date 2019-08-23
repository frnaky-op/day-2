<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'organizer_id' => 1,
            'name' => 'Event Test 1',
            'slug' => 'event-test-1',
            'date' => '2019-08-24 06:00:00',
        ]);

        Event::create([
            'organizer_id' => 1,
            'name' => 'Event Test 2',
            'slug' => 'event-test-2',
            'date' => '2019-08-24 06:00:00',
        ]);

        Event::create([
            'organizer_id' => 2,
            'name' => 'Event Test 3',
            'slug' => 'event-test-3',
            'date' => '2019-08-24 06:00:00',
        ]);
    }
}
