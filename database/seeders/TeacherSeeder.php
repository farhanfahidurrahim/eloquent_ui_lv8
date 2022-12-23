<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Teacher::factory()->count(20)->create();
        // DB::table('teachers')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10),
        //     'address' => Str::random(10),
        // ])

        // $data=[
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(30),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(30),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(30),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(30),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(30),
        //     ],
        // ];

        // DB::table('teachers')->insert($data);
    }
}






