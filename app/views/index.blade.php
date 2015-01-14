@extends('layout')

@section('styles')
	<style type="text/css">
	#accordion .glyphicon { margin-right:10px; }
	.panel-collapse>.list-group .list-group-item:first-child {border-top-right-radius: 0;border-top-left-radius: 0;}
	.panel-collapse>.list-group .list-group-item {border-width: 1px 0;}
	.panel-collapse>.list-group {margin-bottom: 0;}
	.panel-collapse .list-group-item {border-radius:0;}

	.panel-collapse .list-group .list-group {margin: 0;margin-top: 10px;}
	.panel-collapse .list-group-item li.list-group-item {margin: 0 -15px;border-top: 1px solid #ddd;border-bottom: 0;padding-left: 30px;}
	.panel-collapse .list-group-item li.list-group-item:last-child {padding-bottom: 0;}

	.panel-collapse div.list-group div.list-group{margin: 0;}
	.panel-collapse div.list-group .list-group a.list-group-item {border-top: 1px solid #ddd;border-bottom: 0;padding-left: 30px;}

	</style>
@stop

@section('content')
	<div class="panel-collapse col-sm-3" style="padding:20px;">
		{{ $content }}
	</div>
	<div class="col-sm-offset-1 col-sm-8" style="padding:20px;">
		@include('_navbar')
	</div>
@stop

