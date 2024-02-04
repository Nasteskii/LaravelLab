<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->delete();

        $comments = array(
            ['id' => 1, 'on_post' => 1, 'from_user' => 1, 'body' => 'First Comment'],
            ['id' => 2, 'on_post' => 1, 'from_user' => 1, 'body' => 'Second Comment'],
            ['id' => 3, 'on_post' => 1, 'from_user' => 1, 'body' => 'Third Comment']
        );

        DB::table('comments')->insert($comments);
    }
}
