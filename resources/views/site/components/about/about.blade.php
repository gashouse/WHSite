<div id="about" class="details">

	<div id="DetailsAddress" class="details__bar">
		<div class="container">
			<div class="row">
				<div class="small-12 columns">
					<div class="details__address">
						<h3 class="hide-for-small-only">1000 Spruce Street, Saint Louis</h3>
						<h3 class="show-for-small-only">1000 Spruce Street<br>Saint Louis</h3>
					</div>
					<div class="details__map-phone">
						<a href="https://www.google.com/maps/place/Wheelhouse+Downtown/@38.6235979,-90.1971275,17z/data=!3m1!4b1!4m2!3m1!1s0x87d8b310648911f3:0x1fed9afbda51e103" target="_blank" class="details__view-map"><span class="icon icon-location"></span>View on Map</a>
						<span class="details__phone"><a href="tel:1-314-833-3653">(314) 833-3653</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="DetailsBlocks" class="details__blocks">
		<div id="hours" class="container container-full-sm">
			<div class="row no-m-sm">

				<div class="small-12 columns details__block show-for-small-only">
					<div id="TodaysHours" class="details__block--hours details__block--todays-hours todays-hours__view-more todays-hours__view-all">
						@include('site.components.about.about__todays-hours')
					</div>
				</div>

				<div class="small-6 large-4 columns details__block details__block--all-hours">
					<div class="details__block--hours details__block--hours-bar">
						@include('site.components.about.about__bar-hours')
					</div>
				</div>
				<div class="small-6 large-4 columns details__block details__block--all-hours">
					<div class="details__block--hours details__block--hours-kitchen">
						@include('site.components.about.about__kitchen-hours')
					</div>
				</div>

				<div class="small-12 columns hide-for-large hours__disclaimer hours__disclaimer--xs-sm">
					<div class="disclaimer">*Hours are extended for home Blues games, home Cardinals games, and other major events downtown.</div>
				</div>

				<div id="about" class="small-12 large-4 columns details__block">
					<div class="details__block--about">
						@include('site.components.about.about__details')
					</div>
				</div>
			</div>
		</div>


		<div class="container container-full show-for-large hours__disclaimer--container-md-lg">
			<div class="row no-m-sm">
				<div class="small-12 columns hours__disclaimer">
					<div class="disclaimer">*Hours are extended for home Blues games, home Cardinals games, and other major events downtown.</div>
				</div>
			</div>
		</div>


	</div>
</div>
