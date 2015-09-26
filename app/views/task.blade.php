@extends('layout')
@section('content')
<section class="header section-padding">
<div class="background">&nbsp;</div>
<div class="container">
<div class="header-text">
<h1> fun issue tracker </h1>

<p>
Showing a single task <br/> using route parameter!
</p>
</div>
</div>
</section>

<div class="container">
<section class="section-padding">
<div class="jumbotron text-center">

<div class="panel panel-default">
<div class="panel-heading">
<h1><span class="grey">Task </span> {{ $task->id }}
</h1>
</div>
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Your name</th>
<th> Your email</th>
<th>Title</th>
<th>description</th>
<th>case</th>
<th>Finish</th>
<th>Control</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{ $task->id }} </td>
<td>{{ $task->yourname }}</td>
<td>{{ $task-> youremail}}</td>
<td>{{ $task-> title}}</td>
<td>{{ $task-> description}}</td>
<td>{{ $task-> case}}</td>

<td>{{ $task->done ? 'Yes' : 'No'}}</td>
<td>
<a href="{{ action('TasksController@edit', $task->id) }}" class="btn">Edit</a>
<a href="{{ action('TasksController@delete', $task->id) }}" class="btn">Delete</a>
</td>
</tr>
</tbody>
</table>
</div>

</div>
</section>
</div>
@stop
