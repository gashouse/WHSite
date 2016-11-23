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
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">

					<table class="table table-striped">

						<thead>
							<tr>
								<th>Day</th>
								<th>Kitchen Open</th>
								<th>Kitchen Close</th>
								<th>Bar Open</th>
								<th>Bar Close</th>
								<th>Edit</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($hours as $hours_by_day)
							<tr>
								<td>{{ $hours_by_day->day }}</td>
								<td>{{ $hours_by_day->kitchen_open }}<sup>{{ $hours_by_day->kitchen_open_suffix }}</sup></td>
								<td>{{ $hours_by_day->kitchen_close }}<sup>{{ $hours_by_day->kitchen_close_suffix }}</sup></td>
								<td>{{ $hours_by_day->bar_open }}<sup>{{ $hours_by_day->bar_open_suffix }}</sup></td>
								<td>{{ $hours_by_day->bar_close }}<sup>{{ $hours_by_day->bar_close_suffix }}</sup></td>
								<td><a href="{{ route('hours.edit', $hours_by_day->id) }}" class="btn btn-default btn-sm">Edit</a></td>
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

