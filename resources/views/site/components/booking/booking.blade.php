<div id="booking" class="booking">
	<div class="row">
		<div class="small-12 columns">
			<div class="label__underline booking__label">
				Booking
			</div>
		</div>
		<div class="small-12 columns">
			<div class="booking__title">
				<h3>Reserve your table now</h3>
			</div>
		</div>
	</div>

	<div class="row collapse">
		<div class="small-12 medium-4 columns booking__block booking__block--tabs">
			@include('site.components.booking.booking__tabs')
		</div>
		<div class="small-12 medium-8 columns booking__block booking__block--content">
			@include('site.components.booking.booking__content')
		</div>
	</div>
</div>
