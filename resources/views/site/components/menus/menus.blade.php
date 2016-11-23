<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
@foreach ($menus as $menu)
	@if($menu->slug == 'lunch-dinner-menu')
		<?php $lunch_dinner_url = Storage::url($menu->url); ?>
	@elseif($menu->slug == 'drink-menu')
		<?php $drink_url = Storage::url($menu->url); ?>
	@elseif($menu->slug == 'brunch-menu')
		<?php $brunch_url = Storage::url($menu->url); ?>
	@endif
@endforeach

<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
<div id="menus" class="menus">


		<div class="row no-m-sm">

			<div class="small-12 medium-4 columns menus__block menus__block--lunch-dinner">
				<div class="menus__block--inner">
					<img src="http://wheelhousestl.com/content/themes/gashouse/media/img//svg/food-menu.svg" class="menus__svg">
					<a href="{{ $lunch_dinner_url }}" target="_blank" class="button button-white-ghost">Lunch/Dinner Menu</a>
				</div>
			</div>

			<div class="small-12 medium-4 columns menus__block menus__block--drinks">
				<div class="menus__block--inner">
					<img src="http://wheelhousestl.com/content/themes/gashouse/media/img//svg/drink-menu.svg" class="menus__svg">
					<a href="{{ $drink_url }}" target="_blank" class="button button-white-ghost">Drink Menu</a>
				</div>
			</div>

			<div class="small-12 medium-4 columns menus__block menus__block--brunch">
				<div class="menus__block--inner">
					<img src="http://wheelhousestl.com/content/themes/gashouse/media/img//svg/brunch-menu.svg" class="menus__svg">
					<a href="{{ $brunch_url }}" target="_blank" class="button button-white-ghost">Brunch Menu</a>
				</div>
			</div>


		</div>

		<div class="menus__background"></div>



</div>
