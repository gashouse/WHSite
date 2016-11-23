@extends('admin.layouts.admin')

<?php
	$time_options = [
		'1:00', '1:30', '2:00', '2:30', '3:00', '3:30', '4:00', '4:30', '5:00', '5:30', '6:00', '6:30',
		'7:00', '7:30', '8:00', '8:30', '9:00', '9:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30',
		'Close'
	];

	$ampm_options = ['AM', 'PM'];
?>

@section('content')
<div class="container">
    <div class="row">

		<form method="POST" action="{{ route('hours.update', $hours->id) }}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}

        <div class="col-md-8 col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

					<fieldset>

<?php
// --------------------------------------------------------------------------------
// Day of Week
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Day of Week</label>
								<p class="form__uneditable">{{ $hours->day }}</p>
								<input type="hidden" id="day" name="day" value="{{ old('day', $hours->day) }}" placeholder="Monday, Tuesday..." class="form-control">
								@if ($errors->has('day'))
								<p class="validation-error">{{ $errors->first('day') }}</p>
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
								<label class="form__label">Abbreviation</label>
								<input type="text" id="day_abbr" name="day_abbr" value="{{ old('day_abbr', $hours->day_abbr) }}" placeholder="Monday, Tuesday..." class="form-control">
								@if ($errors->has('day_abbr'))
								<p class="validation-error">{{ $errors->first('day_abbr') }}</p>
								@endif
							</div>
						</div>
<?php
// --------------------------------------------------------------------------------
// Kitchen Open
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Kitchen Open</label>
								<select id="kitchen_open" name="kitchen_open" class="form-control">
									<option value="">Choose Time</option>
									@foreach($time_options as $time_option)
										@if(old('kitchen_open', $hours->kitchen_open) == $time_option)
										<option value="{{ $time_option }}" selected="selected">{{ $time_option }}</option>
										@else
										<option value="{{ $time_option }}">{{ $time_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('kitchen_open'))
								<p class="validation-error">{{ $errors->first('kitchen_open') }}</p>
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
								<label class="form__label">AM/PM</label>
								<select id="kitchen_open_suffix" name="kitchen_open_suffix" class="form-control">
									<option value=""></option>
									@foreach($ampm_options as $ampm_option)
										@if(old('kitchen_open_suffix', $hours->kitchen_open_suffix) == $ampm_option)
										<option value="{{ $ampm_option }}" selected="selected">{{ $ampm_option }}</option>
										@else
										<option value="{{ $ampm_option }}">{{ $ampm_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('kitchen_open_suffix'))
								<p class="validation-error">{{ $errors->first('kitchen_open_suffix') }}</p>
								@endif
							</div>
						</div>
<?php
// --------------------------------------------------------------------------------
// Kitchen Close
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Kitchen Close</label>
								<select id="kitchen_close" name="kitchen_close" class="form-control">
									<option value="">Choose Time</option>
									@foreach($time_options as $time_option)
										@if(old('kitchen_close', $hours->kitchen_close) == $time_option)
										<option value="{{ $time_option }}" selected="selected">{{ $time_option }}</option>
										@else
										<option value="{{ $time_option }}">{{ $time_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('kitchen_close'))
								<p class="validation-error">{{ $errors->first('kitchen_close') }}</p>
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
								<label class="form__label">AM/PM</label>
								<select id="kitchen_close_suffix" name="kitchen_close_suffix" class="form-control">
									<option value=""></option>
									@foreach($ampm_options as $ampm_option)
										@if(old('kitchen_close_suffix', $hours->kitchen_close_suffix) == $ampm_option)
										<option value="{{ $ampm_option }}" selected="selected">{{ $ampm_option }}</option>
										@else
										<option value="{{ $ampm_option }}">{{ $ampm_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('kitchen_close_suffix'))
								<p class="validation-error">{{ $errors->first('kitchen_close_suffix') }}</p>
								@endif
							</div>
						</div>
<?php
// --------------------------------------------------------------------------------
// Bar Open
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Bar Open</label>
								<select id="bar_open" name="bar_open" class="form-control">
									<option value="">Choose Time</option>
									@foreach($time_options as $time_option)
										@if(old('bar_open', $hours->bar_open) == $time_option)
										<option value="{{ $time_option }}" selected="selected">{{ $time_option }}</option>
										@else
										<option value="{{ $time_option }}">{{ $time_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('bar_open'))
								<p class="validation-error">{{ $errors->first('bar_open') }}</p>
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
								<label class="form__label">AM/PM</label>
								<select id="bar_open_suffix" name="bar_open_suffix" class="form-control">
									<option value=""></option>
									@foreach($ampm_options as $ampm_option)
										@if(old('bar_open_suffix', $hours->bar_open_suffix) == $ampm_option)
										<option value="{{ $ampm_option }}" selected="selected">{{ $ampm_option }}</option>
										@else
										<option value="{{ $ampm_option }}">{{ $ampm_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('bar_open_suffix'))
								<p class="validation-error">{{ $errors->first('bar_open_suffix') }}</p>
								@endif
							</div>
						</div>
<?php
// --------------------------------------------------------------------------------
// Bar Close
// --------------------------------------------------------------------------------
?>
						<div class="row">
							<div class="col-xs-12 form__item">
								<label class="form__label">Bar Close</label>
								<select id="bar_close" name="bar_close" class="form-control">
									<option value="">Choose Time</option>
									@foreach($time_options as $time_option)
										@if(old('bar_close', $hours->bar_close) == $time_option)
										<option value="{{ $time_option }}" selected="selected">{{ $time_option }}</option>
										@else
										<option value="{{ $time_option }}">{{ $time_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('bar_close'))
								<p class="validation-error">{{ $errors->first('bar_close') }}</p>
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
								<label class="form__label">AM/PM</label>
								<select id="bar_close_suffix" name="bar_close_suffix" class="form-control">
									<option value=""></option>
									@foreach($ampm_options as $ampm_option)
										@if(old('bar_close_suffix', $hours->bar_close_suffix) == $ampm_option)
										<option value="{{ $ampm_option }}" selected="selected">{{ $ampm_option }}</option>
										@else
										<option value="{{ $ampm_option }}">{{ $ampm_option }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('bar_close_suffix'))
								<p class="validation-error">{{ $errors->first('bar_close_suffix') }}</p>
								@endif
							</div>
						</div>

					</fieldset>

                </div>
            </div>
        </div>

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

