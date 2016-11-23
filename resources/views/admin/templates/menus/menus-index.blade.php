@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">

		<div class="col-md-4 col-lg-3">
			<div class="panel panel-default">
				<div class="panel-heading">Sidebar</div>
				<div class="panel-body">
				sidebar
				</div>
			</div>
		</div>

        <div class="col-md-8 col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">Menus</div>
                <div class="panel-body">

					<a href="{{ route('menus.create') }}" class="btn btn-default btn-sm">New Menu</a>

					<table class="table table-striped">

						<thead>
							<tr>
								<th>Thumbnail</th>
								<th>Name</th>
								<th>Slug</th>
								<th>Link</th>
								<th>Edit</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($menus as $menu)
							<tr>
								<td>{{ $menu->thumbnail }}</td>
								<td>{{ $menu->name }}</td>
								<td>{{ $menu->slug }}</td>
								<td><a href="{{ Storage::url($menu->url) }}" target="_blank">View Menu</a></td>
								<td><a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-default btn-sm">Edit</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection

