<div class="label__underline hours__label">Kitchen Hours</div>

<div class="hours hours__vertical">
	@foreach ($hours as $kitchen_hours)
		<div class="row hours__row<?php echo if_today($kitchen_hours->day, ' hours__active'); ?>">
			<div class="small-12 columns show-for-small-only hours__day">
				{{ $kitchen_hours->day }}
			</div>
			<div class="medium-3 columns hide-for-small-only hours__day-abbr">
				{{ $kitchen_hours->day_abbr }}
			</div>
			<div class="small-12 medium-9 columns hours__open-to-close">
				{{ $kitchen_hours->kitchen_open }}
				<sup>{{ $kitchen_hours->kitchen_open_suffix }}</sup>
				<span>to</span>
				{{ $kitchen_hours->kitchen_close }}
				<sup>{{ $kitchen_hours->kitchen_close_suffix }}</sup>
			</div>
		</div>
	@endforeach
</div>
