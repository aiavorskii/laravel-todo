{{-- @todo --}}

@extends('layouts.app_inner')

@section('content')
    <div class="panel-heading panel-heading--main">Create TODO</div>
        <div class="panel-body">
            <form action="{{ route('todo.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="textfield" class="form-control" name="title" id="title" placeholder="Enter TODO name" value="" />
                </div>
                <div class="form-group">
                    <label for="list">List</label>
                    <select name="list" class="form-control">
                        <option>Inbox</option>
                        {{-- @todo add other options here --}}
                    </select>
                </div>

                <div class="form-group">
                    <label for="up_to">Due to</label>
                    {{-- Date picker here --}}
                    <input type="textfield" class="form-control datepicker" name="up_to" id="up_to" placeholder="" value="" />
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" placeholder="Additional notes about TODO" value="" rows="5" resize></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection