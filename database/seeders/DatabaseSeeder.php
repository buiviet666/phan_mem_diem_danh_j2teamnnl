<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AssignmentSeeder::class);
        $this->call(attendanceSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(LecturerSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(UserSeeder::class);
    }
}
