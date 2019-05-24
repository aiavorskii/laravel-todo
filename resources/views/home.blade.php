@extends('layouts.app')

@section('content')
    <div class="panel-heading panel-heading--main">Dashboard</div>
        <div class="panel-body">
            <div class="panel panel-default ">
                <div class="panel-heading">Actions</div>
                <div class="panel-body">

                    <div class="btn-toolbar" role="toolbar">
                        <a href="{{ route('todo.create') }}" class="btn btn-default">Add new TODO</a>
                        <a href="{{ route('todo-list.create') }}" class="btn btn-default">Create new TODO list</a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Calendar</div>
                <div class="panel-body">
                    Place for clandar
                </div>
            </div>
        </div>
    </div>

@endsection
