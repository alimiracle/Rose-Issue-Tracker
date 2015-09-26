<?php

class TasksController extends BaseController
{
	public function home()
	{
		$tasks = Task::all();
		return View::make('home', compact('tasks'));
	}

	public function create()
	{
		return View::make('create');
	}
	
	public function edit(Task $task)
	{
		return View::make('edit', compact('task'));
	}
	
	public function delete(Task $task)
	{
		return View::make('delete', compact('task'));
	}

	public function saveCreate()
	{
		$input = Input::all();
		$rules = array(
			'yourname'=> 'required',			
			'youremail'=> 'required',			
			'title'=> 'required',			
'description'=> 'required'
	);
		$validator = Validator::make($input, $rules);
		if($validator->passes()) {
			$task = new Task;
		$task->yourname = Input::get('yourname');
		$task->youremail = Input::get('youremail');
		$task->title = Input::get('title');
		$task->description = Input::get('description');
		$task->case = Input::get('case');
			$task->save();

			return Redirect::action('TasksController@home')->withErrors($validator);
		}

		return Redirect::action('TasksController@create');
	}

	public function doEdit()
	{
		$task = Task::findOrFail(Input::get('id'));
			$task = new Task;
		$task->yourname = Input::get('yourname');
		$task->youremail = Input::get('youremail');
		$task->title = Input::get('title');
		$task->description = Input::get('description');
		$task->case = Input::get('case');
		$task->done = Input::get('done');
		$task->save();

		return Redirect::action('TasksController@home');
	}

	public function doDelete()
	{
		$task = Task::findOrFail(Input::get('id'));
		$task->delete();

		return Redirect::action('TasksController@home');
	}

	public function show($id)
	{
		$task = Task::find($id);

		return View::make('task', compact('task'));

	}
}
