<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
			'name' => 'Brunch Menu',
			'slug' => 'brunch-menu',
			'url' => 'storage/uploads/menus/brunch-menu.pdf',
			'thumbnail' => '',
			'notes' => '',
        ]);
    }
}
