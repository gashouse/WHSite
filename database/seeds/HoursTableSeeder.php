<?php

use Illuminate\Database\Seeder;

class HoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('hours')->insert([
			'day' => 'Monday',
			'day_abbr' => 'Mon',
			'kitchen_open' => '11:00',
			'kitchen_open_suffix' => 'AM',
			'kitchen_close' => '2:00',
			'kitchen_close_suffix' => 'PM',
			'bar_open' => '11:00',
			'bar_open_suffix' => 'AM',
			'bar_close' => 'Close',
			'bar_close_suffix' => '',
        ]);

        DB::table('hours')->insert([
			'day' => 'Tuesday',
			'day_abbr' => 'Tue',
			'kitchen_open' => '11:00',
			'kitchen_open_suffix' => 'AM',
			'kitchen_close' => '2:00',
			'kitchen_close_suffix' => 'PM',
			'bar_open' => '11:00',
			'bar_open_suffix' => 'AM',
			'bar_close' => 'Close',
			'bar_close_suffix' => '',
        ]);

        DB::table('hours')->insert([
			'day' => 'Wednesday',
			'day_abbr' => 'Wed',
			'kitchen_open' => '11:00',
			'kitchen_open_suffix' => 'AM',
			'kitchen_close' => '9:00',
			'kitchen_close_suffix' => 'PM',
			'bar_open' => '11:00',
			'bar_open_suffix' => 'AM',
			'bar_close' => 'Close',
			'bar_close_suffix' => '',
        ]);

        DB::table('hours')->insert([
			'day' => 'Thursday',
			'day_abbr' => 'Thu',
			'kitchen_open' => '11:00',
			'kitchen_open_suffix' => 'AM',
			'kitchen_close' => '9:00',
			'kitchen_close_suffix' => 'PM',
			'bar_open' => '11:00',
			'bar_open_suffix' => 'AM',
			'bar_close' => 'Close',
			'bar_close_suffix' => '',
        ]);

        DB::table('hours')->insert([
			'day' => 'Friday',
			'day_abbr' => 'Fri',
			'kitchen_open' => '11:00',
			'kitchen_open_suffix' => 'AM',
			'kitchen_close' => '10:00',
			'kitchen_close_suffix' => 'PM',
			'bar_open' => '11:00',
			'bar_open_suffix' => 'AM',
			'bar_close' => '3:00',
			'bar_close_suffix' => 'AM',
        ]);

        DB::table('hours')->insert([
			'day' => 'Saturday',
			'day_abbr' => 'Sat',
			'kitchen_open' => '10:00',
			'kitchen_open_suffix' => 'AM',
			'kitchen_close' => '10:00',
			'kitchen_close_suffix' => 'PM',
			'bar_open' => '10:00',
			'bar_open_suffix' => 'AM',
			'bar_close' => '3:00',
			'bar_close_suffix' => 'AM',
        ]);

        DB::table('hours')->insert([
			'day' => 'Sunday',
			'day_abbr' => 'Sun',
			'kitchen_open' => '10:00',
			'kitchen_open_suffix' => 'AM',
			'kitchen_close' => '7:00',
			'kitchen_close_suffix' => 'PM',
			'bar_open' => '10:00',
			'bar_open_suffix' => 'AM',
			'bar_close' => 'Close',
			'bar_close_suffix' => '',
        ]);
    }
}
