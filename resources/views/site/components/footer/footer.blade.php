<div class="footer">

<?php
// --------------------------------------------------------------------------------
// Back to Top
// --------------------------------------------------------------------------------
?>
{{-- 	<div class="row">
		<div class="small-12 columns">
			<div class="to-top__container">
				<div class="back-to-top">
					<a href="#App" class="scroll to-top__link">
						<div class="to-top__icon"><span class="icon icon-up-medium"></span></div>
						<div class="to-top__text">Back To Top</div>
					</a>
				</div>
			</div>
		</div>
	</div> --}}
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">

		</div>
	</div>
<?php
// --------------------------------------------------------------------------------
// Logo
// --------------------------------------------------------------------------------
?>
	<footer class="footer__links">
		<div class="row">
			<div class="small-12 medium-2 large-2 columns">
				<div class="footer__block footer__logo">
					<a href="/"><span class="icon icon-logo"></span></a>
				</div>
			</div>
<?php
// --------------------------------------------------------------------------------
// Address
// --------------------------------------------------------------------------------
?>
			<div class="small-12 medium-4 large-4 columns">
				<div class="footer__block footer__block--address">
					<h4>Downtown</h4>
					<p class="footer__address"><a href="https://www.google.com/maps/place/Wheelhouse+Downtown/@38.6235979,-90.1971275,17z/data=!3m1!4b1!4m2!3m1!1s0x87d8b310648911f3:0x1fed9afbda51e103" target="_blank">1000 Spruce Street <br />
					Saint Louis, MO <br />
					63102</a></p>
					<p class="footer__phone"><a href="tel:1-314-833-3653">(314) 833-3653</a></p>
				</div>
			</div>
<?php
// --------------------------------------------------------------------------------
// Links
// --------------------------------------------------------------------------------
?>
			<div class="small-12 medium-6 large-6 columns">
				@include('site.components.footer.footer__newsletter')
			</div>

		</div>

	</footer>
<?php
// --------------------------------------------------------------------------------
// Legal
// --------------------------------------------------------------------------------
?>
	<div class="row">
		<div class="small-12 columns">
			<div class="footer__legal">
				Copyright ©&nbsp;2016 Wheelhouse. ALL RIGHTS RESERVED.
<?php
// --------------------------------------------------------------------------------
// Admin Link
// --------------------------------------------------------------------------------
?>
				@if (Route::has('login'))
					@if (Auth::check())
						<a href="{{ route('dashboard') }}" class="">Admin</a>
					@else
						<a href="{{ url('/login') }}" class="">Login</a>
					@endif
				@endif
			</div>
		</div>
	</div>

</div>
