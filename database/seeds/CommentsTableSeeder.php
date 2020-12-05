<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = App\Post::cursor();
        factory(App\Comment::class, 50)->make()->each(function($comment) use ($posts) {
            $comment->post_id = $posts->random()->id;
            $comment->save();
        });
    }
}
