<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
      
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('doctors')->truncate();
        DB::table('services')->truncate();
        DB::table('testimonials')->truncate();
        DB::table('appointments')->truncate();
        DB::table('patients')->truncate();
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        
        $this->call([
            DoctorSeeder::class,
            ServiceSeeder::class,
            TestimonialSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}