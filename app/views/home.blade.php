@extends('layout')
@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>rose issue tracker</h1>
		</div>
	</div>
</section>

<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
		<div class="panel panel-default">
<div class="panel-heading">
</div>

@if ($tasks->isEmpty())
<p> Currently, there is no task!</p>
@else
<table class="table">
	<thead>
		<tr>
		<th>#</th>
		<th>Your name</th>
		<th>Your email</th>
<th>Title</th>
<th>description</th>
<th>case</th>
		<th>Finish</th>
		</tr>
	</thead>
	<tbody>
	@foreach($tasks as $task)
		<tr>
			<td>{{ $task->id }} </td>
			<td><a href="{{ action('TasksController@show', $task->id) }}">{{ $task->yourname }}</a></td>
<td>{{ $task-> youremail}}</td>
<td>{{ $task-> title}}</td>
<td>{{ $task-> description}}</td>
<td>{{ $task-> case}}</td>
			<td>{{ $task->done ? 'Yes' : 'No'}}</td>
			<td>
			<a href="{{ action('TasksController@edit', $task->id) }}" class="btn btn-info">Edit</a>
			<a href="{{ action('TasksController@delete', $task->id) }}" class="btn btn-info">Delete</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endif
</div>	
		</div>

		<div class="jumbotron text-center">
			<div class="row">
				<div class="showcase-box col-md-4">
					<div class="showcase-item">
					<img src="{{ asset('img/icon1.png') }}" />
					<p>
					The most comprehensive rose issue tracker
					</p>
					</div>
				</div>
				<div class="showcase-box col-md-4">
					<div class="showcase-item">
					<img src="{{ asset('img/icon2.png') }}" />
					</div>
				</div>
				<div class="showcase-box col-md-4">
					<div class="showcase-item">
					<img src="{{ asset('img/icon3.png') }}" />
					<p>
					It's not just a rose issue tracker, i't a great community
					</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop
