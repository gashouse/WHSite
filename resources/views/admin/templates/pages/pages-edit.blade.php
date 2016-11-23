@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">

		<form method="POST" action="{{ route('pages.update', $page->id) }}" enctype="multipart/form-data">
		{{ method_field('PUT') }}
		{{ csrf_field() }}

        <div class="col-md-8 col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Page</div>

                <div class="panel-body">
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Title</label>
								<input type="text" id="title" name="title" value="{{ old('title', $page->title) }}" placeholder="Brunch Menu..." class="form-control">
								@if ($errors->has('title'))
								<p class="validation-error">{{ $errors->first('title') }}</p>
								@endif
							</div>
						</div>
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Slug</label>
								<input type="text" id="slug" name="slug" value="{{ old('slug', $page->slug) }}" placeholder="the-slug-goes-here" class="form-control">
								@if ($errors->has('slug'))
								<p class="validation-error">{{ $errors->first('slug') }}</p>
								@endif
							</div>
						</div>

<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">URL</label>
								<input type="text" id="url" name="url" value="{{ old('url', $page->url) }}" placeholder="url/goes-here" class="form-control">
								@if ($errors->has('url'))
								<p class="validation-error">{{ $errors->first('url') }}</p>
								@endif
							</div>
						</div>

<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<a href="{{ Storage::url($page->hero_image) }}" target="_blank">View Hero Image</a><br />
								{{ asset($page->hero_image) }}
								<label class="form__label">Hero Image</label>
								<input type="file" id="hero_image" name="hero_image" value="{{ old('hero_image', $page->hero_image) }}" placeholder="" class="form-control">
								@if ($errors->has('hero_image'))
								<p class="validation-error">{{ $errors->first('hero_image') }}</p>
								@endif
							</div>
						</div>
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Hero Title</label>
								<input type="text" id="hero_title" name="hero_title" value="{{ old('hero_title', $page->hero_title) }}" placeholder="" class="form-control">
								@if ($errors->has('hero_title'))
								<p class="validation-error">{{ $errors->first('hero_title') }}</p>
								@endif
							</div>
						</div>
<?php
// --------------------------------------------------------------------------------
// Notes (Last)
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Hero Tagline</label>
								<textarea id="hero_tagline" name="hero_tagline" class="form-control" rows="5" placeholder="This is an area dedicated to plain text or html...">{{ old('hero_tagline', $page->hero_tagline) }}</textarea>
								@if ($errors->has('hero_tagline'))
								<p class="validation-error">{{ $errors->first('hero_tagline') }}</p>
								@endif
							</div>
						</div>

					</div>

				</div>
			</div>
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
			<div class="col-md-4 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">Sidebar</div>
					<div class="panel-body">
						<button type="submit" class="btn btn-default">Save Changes</button>
						</form>
					</div>
				</div>
				<form method="POST" action="{{ route('pages.destroy', $page->id) }}">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<button type="submit" class="btn btn-default">Delete</button>
				</form>
			</div>



    </div>
</div>
@endsection

