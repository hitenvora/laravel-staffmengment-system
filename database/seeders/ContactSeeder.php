<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
        'name' => Str::random(10),
        'fname' => Str::random(10),
        'lname' => Str::random(10),
        'email' => Str::random(10)."@gmail.com",
        'phone' => 9998003879,
        'message' => Str::random(10),
        
        
        ]);
    }
}
