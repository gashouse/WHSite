<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
			'title' => 'Home',
			'slug' => 'home',
			'url' => '/',
			'active' => TRUE,
			'hero_image' => '',
			'hero_title' => 'Wheelhouse <br />Downtown',
			'hero_tagline' => 'A 10,000 square-foot fusion of sports bar and nightclub.',
        ]);
    }
}
