<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'post one',
                'excerpt' => 'summary of post one',
                'content' => 'content of post one',
                'min_to_read' => 2,
                'is_published' => false,
                'image_path' => 'empty'
            ],
            [
                'title' => 'post two',
                'excerpt' => 'summary of post two',
                'content' => 'content of post two',
                'min_to_read' => 2,
                'is_published' => false,
                'image_path' => 'empty'
            ]
        ];
        foreach ($posts as $key => $value) {
            Post::create($value);
        }
    }
}
