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
                <div class="panel-heading">Pages</div>
                <div class="panel-body">

					<a href="{{ route('pages.create') }}" class="btn btn-default btn-sm">New Page</a>

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
							@foreach ($pages as $page)
							<tr>
								<td>{{ $page->thumbnail }}</td>
								<td>{{ $page->title }}</td>
								<td>{{ $page->slug }}</td>
								<td><a href="{{ Storage::url($page->hero_image) }}" target="_blank">View Hero</a></td>
								<td><a href="{{ route('pages.edit', $page->id) }}" class="btn btn-default btn-sm">Edit</a></td>
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

