<div class="label__underline hours__label">Bar Hours</div>

<div class="hours hours__vertical">
	@foreach ($hours as $bar_hours)
		<div class="row hours__row<?php echo if_today($bar_hours->day, ' hours__active'); ?>">
			<div class="small-12 columns show-for-small-only hours__day">
				{{ $bar_hours->day }}
			</div>
			<div class="medium-3 columns hide-for-small-only hours__day-abbr">
				{{ $bar_hours->day_abbr }}
			</div>
			<div class="small-12 medium-9 columns hours__open-to-close">
				{{ $bar_hours->bar_open }}
				<sup>{{ $bar_hours->bar_open_suffix }}</sup>
				<span>to</span>
				{{ $bar_hours->bar_close }}
				<sup>{{ $bar_hours->bar_close_suffix }}</sup>
			</div>
		</div>
	@endforeach
</div>
