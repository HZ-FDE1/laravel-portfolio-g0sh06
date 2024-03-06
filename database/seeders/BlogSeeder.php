<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => "How can i get credits",
            'description' => 'You need to study hard'
        ]);

        Blog::create([
           'title' => 'How to study Laravel',
           'description' => 'Do not study Laravel'
        ]);

        Blog::create([
            'title' => 'Can i become master at Laravel',
            'description' => 'No, you can not'
        ]);
    }
}
