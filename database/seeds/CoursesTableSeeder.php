<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
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
          'Software Engineering in Information System (SEIS)',
          'Software Engineering in Multimedia (SEMM)',
          'Computer Science',
          'Information Technology',
        ];

        foreach ($data as $course ) {
          Course::create([
            'name' => $course
          ]);
        }
    }
}
