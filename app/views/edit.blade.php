@extends('layout')
@section('content')
<section class="header section-padding">
<div class="background">&nbsp;</div>
<div class="container">
<div class="header-text">
<h1>Edit</h1>
<p>
Edit tasks page
</p>
</div>
</div>
</section>

<div class="container">
<section class="section-padding">
<div class="jumbotron text-center">
<h1>Edit Task {{ $task->id }}</h1>

{{ Form::open(['url'=> '/edit', 'class'=>'form']) }}
{{ Form::hidden('id', $task->id)}}

<div class="form-group">
{{ Form::label('your name', 'Your name:') }}
{{ Form::text('your name', $task->yourname, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('your email', 'Your email:') }}
{{ Form::text('your email', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('title', 'Title:') }}
{{ Form::text('title', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('description', 'description:') }}
{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('case', 'Case:') }}
{{ Form::text('case', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('done', 'Done:') }}
{{ Form::checkbox('done', 1, $task->done) }}
</div>
<div class="form-group">
{{ Form::submit('Save Task', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}

</div>
</section>
</div>
@stop
