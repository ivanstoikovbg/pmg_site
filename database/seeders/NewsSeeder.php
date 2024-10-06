<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'First News',
                'content' => 'Content of the first news',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second News',
                'content' => 'Content of the second news',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    
}
