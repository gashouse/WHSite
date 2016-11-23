@extends('admin.layouts.admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">

					<form method="POST" action="/avatars" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="file" name="avatar"></input>
						<button type="submit" class="btn btn-default">Save Avatar</button>
					</form>

				</div>

			</div>
		</div>
	</div>
</div>
@endsection
