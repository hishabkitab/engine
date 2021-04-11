@extends('view::layouts.master')

@section('module-style')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/client.css') }}">
@endsection

@section('body')
	<main class="container-fluid w-100" role="main">
		<div class="row">
			@yield('content')
		</div>
	</main>
@endsection

@section('module-script')

@endsection

