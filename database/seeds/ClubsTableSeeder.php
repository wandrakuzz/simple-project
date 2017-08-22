<?php

use Illuminate\Database\Seeder;
use App\Club;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
          'Cyberethic',
          'Numoss',
          'PIC',
          'Robotic',
          'Interactive Media',
          'MAD Club',
          'iBusiness',

        ];

        foreach ($data as $club ) {
          Club::create([
            'name' => $club
          ]);
        }
    }
}
