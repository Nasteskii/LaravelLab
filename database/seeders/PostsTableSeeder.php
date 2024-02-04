<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->delete();

        $posts = array(
            ['id' => 1, 'author' => 1, 'title' => 'First Post', 'body' => 'Body description here']
        );

        DB::table('posts')->insert($posts);
    }
}
