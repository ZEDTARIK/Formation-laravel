<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $users = factory(App\User::class, 10)->create();

        $posts = factory(App\Post::class, 20)->make()->each(function($post) use ($users) {
                $post->user_id = $users->random()->id;
                $post->save();
        });

        factory(App\Comment::class, 50)->make()->each(function($comment) use ($posts) {
            $comment->post_id = $posts->random()->id;
            $comment->save();
        });

    }


}
