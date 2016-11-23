<div class="hero hero__image">

	<div class="hero__content">

		<div class="container">
			<div class="row">
				<div class="small-12 columns hero__title">
					<h1>{!! $page->hero_title !!}</h1>
				</div>
				<div class="small-12 columns hero__tagline">
					<p>{!! $page->hero_tagline !!}</p>
				</div>
			</div>
		</div>

	</div>

	@if($page->hero_image)
	<div class="hero__background-image" style="background-image: url({{ Storage::url($page->hero_image) }})"></div>
	@else
	<div class="hero__background-image"></div>
	@endif

</div>
