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
        if ($this->command->confirm("Do you want to refresh the Database ? ") ) 
        {
            $this->command->call("migrate:refresh");
            $this->command->info("Database was Refreshed !");
        }

        $this->call([
                UsersTableSeeder::class, 
                PostsTableSeeder::class, 
                CommentsTableSeeder::class
            ]);
    }


}
