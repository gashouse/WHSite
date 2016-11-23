@extends('site.layouts.main')

@section('content')

	@include('site.components.heros.hero__image')
	@include('site.components.about.about')
	@include('site.components.menus.menus')
	@include('site.components.booking.booking')
	@include('site.components.connect.connect')

@endsection
