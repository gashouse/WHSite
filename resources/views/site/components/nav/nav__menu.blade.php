<div id="NavMenu" class="nav__menu">

	<div class="nav__menu--left">
		<div class="table">
			<div class="table-cell">
				<div class="menu--nav">
					<div class="row">

						<div class="small-12 columns">
							<div class="menu--links">
								<a href="#about" class="scroll close-menu"><h3 class="menu--category">About</h3></a>
								<ul>
									<li><a href="#hours" class="scroll close-menu">Hours</a></li>
									<li><a href="#menus" class="scroll close-menu">Menus</a></li>
									{{-- <li><a href="">News</a></li> --}}
								</ul>
								<a href="#booking" class="scroll close-menu"><h3 class="menu--category menu--div">Booking</h3></a>
								<ul>
									<li class="menu-link__with-note"><a href="https://www.yelpreservations.com/r/wheelhouse-downtown/" target="_blank" class="menu-link__external">Reservations <span class="icon icon-external-link"></span></a></li>
									<li class="menu-link__note">1-6 People</li>
									<li class="menu-link__with-note"><a href="#parties" class="scroll close-menu">Parties</a></li>
									<li class="menu-link__note">7+ People</li>
									<li><a href="#vip" class="scroll close-menu">VIP &amp; Bottle Service</a></li>
								</ul>
								<a href="#connect" class="scroll close-menu"><h3 class="menu--category menu--div">Connect</h3></a>
								<ul>
									{{-- <li><a href="">Social Feed</a></li> --}}
									{{-- <li><a href="">Gallery</a></li> --}}
									<li><a href="https://www.staffedup.com/wheelhouse-stl" target="_blank" class="menu-link__external">Jobs <span class="icon icon-external-link"></span></a></li>
									<li><a href="http://eepurl.com/-j11v" target="_blank" class="menu-link__external">Newsletter <span class="icon icon-external-link"></span></a></li>
									<li><a href="#contact" class="scroll close-menu">Contact</a></li>
								</ul>
							</div>
						</div>

						<div class="small-12 columns hide-for-small-only">
							<div class="menu--contact">
								<div class="menu--address">
									<h4>Location</h4>
									<p>1000 Spruce Street <br />
									Saint Louis, Missouri 63102 (<a href="">map it</a>)</p>
								</div>
								<div class="menu--phone-email">
									Call: <a href="">(314) 833-3653</a> <span>|</span> Email: <a href="">info@wheelhousestl.com</a>
								</div>
							</div>
						</div>

						<div class="small-12 columns hide-for-small-only">
							<div class="menu--social">
								<ul>
									<li><a href=""><span class="icon icon-instagram"></span></a></li>
									<li><a href=""><span class="icon icon-facebook"></span></a></li>
									<li><a href=""><span class="icon icon-twitter"></span></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="nav__menu--right">
		<div class="table">
			<div class="table-cell">
				<div class="menu--content">
					{{-- @include('site.components.nav.nav_featured-content') --}}
					@include('site.components.nav.nav_image')
				</div>
			</div>
		</div>
	</div>
</div>
