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
                <div class="panel-heading">Excerpts</div>
                <div class="panel-body">

					<a href="{{ route('excerpts.create') }}" class="btn btn-default btn-sm">New Excerpt</a>

					<table class="table table-striped">

						<thead>
							<tr>
								<th>Title</th>
								<th>Slug</th>
								<th>Content</th>
								<th>Edit</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($excerpts as $excerpt)
							<tr>
								<td>{{ $excerpt->title }}</td>
								<td>{{ $excerpt->slug }}</td>
								<td>{!! str_limit($excerpt->content, 140) !!}</td>
								<td><a href="{{ route('excerpts.edit', $excerpt->id) }}" class="btn btn-default btn-sm">Edit</a></td>
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

