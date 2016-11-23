@extends('site.layouts.main')

@section('content')

<div class="flex-center position-ref full-height">

	<form method="POST" action="/avatars" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="avatar"></input>
		<button type="submit" class="button btn-default">Save Avatar</button>
	</form>

</div>

@endsection
