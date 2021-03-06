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
        $this->call(AuthorsTableSeeder::class);
		$this->call(UsersTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(DirectoriesTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        

    }
}
