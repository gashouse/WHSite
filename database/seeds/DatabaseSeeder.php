<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExcerptsTableSeeder::class);
        $this->call(HoursTableSeeder::class);
        // $this->call(MenusTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
