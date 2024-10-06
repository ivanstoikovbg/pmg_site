<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    public function run()
    {
        Document::create(['title' => 'Документ 1', 'file_path' => '/path/to/document1.pdf', 'category_id' => 1]);
        Document::create(['title' => 'Документ 2', 'file_path' => '/path/to/document2.pdf', 'category_id' => 1]);
        Document::create(['title' => 'Документ 3', 'file_path' => '/path/to/document3.pdf', 'category_id' => 2]);
    }
}
