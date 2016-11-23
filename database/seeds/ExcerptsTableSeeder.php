<?php

use Illuminate\Database\Seeder;

class ExcerptsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('excerpts')->insert([
			'title' => 'Details About',
			'slug' => 'details-about',
			'content' => '<p>Wheelhouse is a modern approach to a bar, restaurant and nightclub, crafted for every celebration. With all the elements of a great experience, you can enjoy more of what you’re passionate about, day and night. The 10,000 sq. ft. locally handmade venue has two large bars, a VIP mezzanine and stage, outdoor patio, and 37 TV’s. Wheelhouse offers a from scratch bar inspired menu, weekend brunch, VIP bottle service on weekends, private/group parties, and the best staff in St. Louis from a locally owned and operated group.</p>',
			'types' => 'details',
			'active' => true,
		]);
	}
}
