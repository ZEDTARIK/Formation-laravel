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
        $nbComments = (int) $this->command->ask("How many of comment you want to generate ?", 50);
        factory(App\Comment::class, $nbComments)->make()->each(function($comment) use ($posts) {
            $comment->post_id = $posts->random()->id;
            $comment->save();
        });
    }
}
