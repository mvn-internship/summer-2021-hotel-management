<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Room::factory(10)->create();
        \App\Models\TypeRoom::factory(10)->create();
        \App\Models\Devices::factory(10)->create();
        \App\Models\Services::factory(10)->create();
        \App\Models\DevicesOfRoom::factory(10)->create();
        \App\Models\Booking::factory(10)->create();
        \App\Models\Billing::factory(10)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\Account::factory(10)->create();
        \App\Models\Employee::factory(10)->create();
        \App\Models\UserOfRoom::factory(10)->create();
    }
}
