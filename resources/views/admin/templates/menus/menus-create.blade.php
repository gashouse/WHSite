@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">

		<form method="POST" action="{{ route('menus.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}

        <div class="col-md-8 col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">Create Menu</div>

                <div class="panel-body">
<?php
// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Name</label>
								<input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Brunch Menu..." class="form-control">
								@if ($errors->has('name'))
								<p class="validation-error">{{ $errors->first('name') }}</p>
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
								<input type="text" id="slug" name="slug" value="{{ old('slug') }}" placeholder="the-slug-goes-here" class="form-control">
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
								<input type="file" id="url" name="url" class="form-control"></input>
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
								<label class="form__label">Visibility</label>
								<input type="text" id="visibility" name="visibility" value="{{ old('visibility') }}" placeholder="" class="form-control">
								@if ($errors->has('visibility'))
								<p class="validation-error">{{ $errors->first('visibility') }}</p>
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
								<label class="form__label">Thumbnail</label>
								<input type="text" id="thumbnail" name="thumbnail" value="{{ old('thumbnail') }}" placeholder="" class="form-control">
								@if ($errors->has('thumbnail'))
								<p class="validation-error">{{ $errors->first('thumbnail') }}</p>
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
								<label class="form__label">Notes</label>
								<textarea id="notes" name="notes" class="form-control" rows="5" placeholder="This is an area dedicated to plain text or html...">{{ old('notes') }}</textarea>
								@if ($errors->has('notes'))
								<p class="validation-error">{{ $errors->first('notes') }}</p>
								@endif
							</div>
						</div>

					</div>

				</div>
			</div>
<?php
// --------------------------------------------------------------------------------
// Notes (Last)
// --------------------------------------------------------------------------------
?>
			<div class="col-md-4 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">Sidebar</div>
					<div class="panel-body">
						<button type="submit" class="btn btn-default">Save Changes</button>
					</div>
				</div>
			</div>

		</form>

    </div>
</div>
@endsection

