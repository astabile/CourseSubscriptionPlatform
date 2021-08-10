<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'Master in PHP, SQL, OOP, MVC, Laravel, Symfony, WordPress +',
            'picture' => 'images/1438222_0ec3_4.png',
            'price' => '12.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Developing Applications in React 17 and ASP.NET Core 5',
            'picture' => 'images/3938742_4fef_2.png',
            'price' => '14.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Python Master Course 3: Learn From Scratch',
            'picture' => 'images/882422_0549_11.png',
            'price' => '9.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Angular University 2021 - From Zero to Angular Expert!',
            'picture' => 'images/2105384_9a0f_15.png',
            'price' => '8.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Web Scraping Master Course: Data Extraction from the Web',
            'picture' => 'images/2861742_c063.png',
            'price' => '16.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Angular & Spring Boot: Creating full stack web app',
            'picture' => 'images/1837638_4cd0_3.png',
            'price' => '17.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Sales system in ASP.NET MVC in C # and SQL full stack',
            'picture' => 'images/1609328_bd24_13.png',
            'price' => '19.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Ecommerce with ASP.NET Core 5 and React Hooks',
            'picture' => 'images/3914984_c244_2.png',
            'price' => '29.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Learn Applied C # Design Patterns in ASP .Net',
            'picture' => 'images/3940438_f419.png',
            'price' => '4.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'title' => 'Master Asp.Net Core 6.0 (ADO.NET + 3 Layers + Stored Procedure)',
            'picture' => 'images/3918612_1950.png',
            'price' => '49.99',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
