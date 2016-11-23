<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
<div id="InstagramSlider" class="instagram__recent swipe">
	<div id="InstagramSliderWrap" class="instagram__post--wrapper swipe-wrap">
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
		@foreach ($instagrams as $instagram)
			<?php $post__active = ($loop->first) ? ' post__active' : ''; ?>
			<div id="InstagramItem--{{ $loop->index }}" class="instagram__post post--{{ $loop->index }}{{ $post__active }}">

				<div class="row instagram__card">

					<div class="small-12 large-8 columns">
						<div class="instagram__photo">
							<img src="{{ $instagram['photo'] }}" alt="">
						</div>
					</div>

					<div class="small-12 large-4 columns">
						<div class="instagram__details">
							<div class="instagram__meta">
								<div class="instagram__likes"><a href="{{ $instagram['link'] }}" target="_blank"><span class="icon icon-heart"></span>{{ $instagram['likes'] }} likes</a></div>
								<div class="instagram__timeago"><a href="{{ $instagram['link'] }}" target="_blank">{{ $instagram['time_ago'] }}</a></div>
							</div>
							<div class="instagram__text--wrapper">
								<div class="instagram__text">{{ $instagram['text'] }}</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		@endforeach

	</div>
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
	<div id="InstagramPrev" class="instagram__controls instagram__prev">
		<a href="#" class="pd"><span class="icon-left-medium"></span></a>
	</div>
	<div id="InstagramNext" class="instagram__controls instagram__next">
		<a href="#" class="pd"><span class="icon-right-medium"></span></a>
	</div>

</div>

<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
<div id="InstagramThumbnails" class="instagram__thumbnails">

	@foreach ($instagrams as $instagram)
	<?php $thumbnail__active = ($loop->first) ? ' thumbnail__active' : ''; ?>
	<div id="InstagramThumbnail--{{ $loop->index }}" class="instagram__thumbnail thumbnail--{{ $loop->index }}{{ $thumbnail__active }}">
		<a href="#" class="pd">
			<img src="{{ $instagram['photo'] }}" alt="">
			<div class="thumb__overlay"></div>
		</a>
	</div>
	@endforeach
</div>
