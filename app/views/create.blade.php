@extends('layout')
@section('content')
<section class="header section-padding">
<div class="background">&nbsp;</div>
<div class="container">
<div class="header-text">
<h1>Create</h1>
<p>
Create tasks page
</p>
</div>
</div>
</section>

<div class="container">
<section class="section-padding">
<div class="jumbotron text-center">
<h1>Create A Task</h1>

{{ Form::open(['url'=> '/create', 'class' => 'form']) }}
<div>
{{ Form::label('yourname', 'Your name:') }}
{{ Form::text('yourname', null, ['class'=>'form-control']) }}
</div>

<div>
{{ Form::label('youremail', 'Your email:') }}
{{ Form::text('youremail', null, ['class'=>'form-control']) }}
</div>
<div>
{{ Form::label('title', 'Title:') }}
{{ Form::text('title', null, ['class'=>'form-control']) }}
</div>

<div>
{{ Form::label('description', 'description:') }}
{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>

<div>
{{ Form::label('case', 'Case:') }}
{{ Form::text('case', null, ['class'=>'form-control']) }}
</div>
<div>
{{ Form::submit('Create Task', ['class'=>'btn btn-primary']) }}
</div>
{{ Form::close() }}

</div>
</section>
</div>
@stop
