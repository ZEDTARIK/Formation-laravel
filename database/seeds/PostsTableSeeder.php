<?php

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
        $users = App\User::all();
        $nbPosts = (int) $this->command->ask("How many of post you want to generate ?", 20);
        factory(App\Post::class, $nbPosts)->make()->each(
            function($post) use ($users) 
            {
                $post->user_id = $users->random()->id;
                $post->save();
            });
    }
}
