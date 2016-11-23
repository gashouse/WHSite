<div class="todays-hours__label">Todays Hours</div>

<div class="hours hours__vertical">
	@foreach ($hours as $todays_hours)
		@if(if_today($todays_hours->day))
			<div class="row">
				<div class="small-6 columns">
					<div class="row hours__row">
						<div class="small-12 columns hours__day">
							Bar
						</div>
						<div class="small-12 columns hours__open-to-close">
							{{ $todays_hours->bar_open }}
							<sup>{{ $todays_hours->bar_open_suffix }}</sup>
							<span>to</span>
							{{ $todays_hours->bar_close }}
							<sup>{{ $todays_hours->bar_close_suffix }}</sup>
						</div>
					</div>
				</div>
				<div class="small-6 columns">
					<div class="row hours__row">
						<div class="small-12 columns hours__day">
							Kitchen
						</div>
						<div class="small-12 columns hours__open-to-close">
							{{ $todays_hours->kitchen_open }}
							<sup>{{ $todays_hours->kitchen_open_suffix }}</sup>
							<span>to</span>
							{{ $todays_hours->kitchen_close }}
							<sup>{{ $todays_hours->kitchen_close_suffix }}</sup>
						</div>
					</div>
				</div>
			</div>
		@endif
	@endforeach
</div>
<div class="details__block--view-all">
	<div class="row">
		<div class="small-12 columns details__block--view-all-link">
			<a href="#" id="ViewHoursLink" class="pd active__view-all">
				<span class="icon icon-down-small hours__view-all"></span>
				<span class="hours__view-all">View all hours</span>
				<span class="icon icon-up-small hours__view-less"></span>
				<span class="hours__view-less">View less hours</span>
			</a>
		</div>
	</div>
</div>

