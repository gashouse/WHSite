@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">

		<form method="POST" action="{{ route('excerpts.update', $excerpt->id) }}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}

        <div class="col-md-8 col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Excerpt</div>

                <div class="panel-body">
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Title</label>
								<input type="text" id="title" name="title" value="{{ old('title', $excerpt->title) }}" placeholder="The Title Goes Here..." class="form-control">
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
								<input type="text" id="slug" name="slug" value="{{ old('slug', $excerpt->slug) }}" placeholder="the-slug-goes-here" class="form-control">
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
								<label class="form__label">Content</label>
								<textarea id="content" name="content" class="form-control" rows="5" placeholder="This is an area dedicated to plain text or html...">{{ old('content', $excerpt->content) }}</textarea>
								@if ($errors->has('content'))
								<p class="validation-error">{{ $errors->first('content') }}</p>
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
								<label class="form__label">Types</label>
								<input type="text" id="types" name="types" value="{{ old('types', $excerpt->types) }}" placeholder="comma, and, space, delimited" class="form-control">
								@if ($errors->has('types'))
								<p class="validation-error">{{ $errors->first('types') }}</p>
								@endif
							</div>
						</div>

					</div>

				</div>
			</div>

			<div class="col-md-4 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">Sidebar</div>
					<div class="panel-body">
						@if(old('active', $excerpt->active) == true)
						<input type="checkbox" id="active" name="active" value="1" checked> Active<br>
						@else
						<input type="checkbox" id="active" name="active" value="1"> Active<br>
						@endif
						<button type="submit" class="btn btn-default">Save Changes</button>
						</form>
					</div>
				</div>
				<form method="POST" action="{{ route('excerpts.destroy', $excerpt->id) }}">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<button type="submit" class="btn btn-default">Delete</button>
				</form>
			</div>

    </div>
</div>
@endsection

