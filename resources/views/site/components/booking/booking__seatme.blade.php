<div id="BookingReservations" class="booking__content--block booking__seatme booking__active">

	<form method="get" action="https://www.seatme.yelp.com/r/wheelhouse-downtown/" target="_blank">

		<div class="row">
			<div class="small-12 columns">
				<div class="booking__description">
				<p>For reservations of <span class="highlight">6 people or less</span> you can call or use the form below to book online.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-12 columns">
				<div class="booking__call">
					<p>Call</p>
					<a href="tel:1-314-833-3653">(314) 833-3653</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="small-12 columns">
				<div class="booking__form">
					<div class="row">
						<div class="small-12 medium-4 columns">
							<div class="booking__seatme--people">
								<label class="booking__label">People</label>
								<select id="covers" name="covers" class="booking__input booking__people">
									<option value="1">1 Person</option>
									<option value="2" selected="selected">2 People</option>
									<option value="3">3 People</option>
									<option value="4">4 People</option>
									<option value="5">5 People</option>
									<option value="6">6 People</option>
								</select>
							</div>
						</div>

						<div class="small-12 medium-4 columns">
							<div class="booking__seatme--date">
								<label class="booking__label">Date</label>
								<input type="text" id="date" name="date" value="{{ $default_date }}" class="booking__input booking__date-picker">
							</div>
						</div>

						<div class="small-12 medium-4 columns">
							<div class="booking__seatme--time">
								<label class="booking__label">Time</label>
								@include('site.components.booking.booking__seatme--time')
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="small-12 columns">
				<div class="booking__seatme--description">
					<p>Powered By SeatMe</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="small-12 columns">
				<div class="reservation-ot-submit booking__seatme--submit">
					<button type="submit" class="button button__seatme">Book online</button>
				</div>
			</div>
		</div>

	</form>

</div>
