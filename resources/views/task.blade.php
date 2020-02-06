@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $user->name }}'s  Tasks (<a href="/create">Add New Task</a>)
                </div>

                <div class="card-body">
                    <ul>
                    @foreach($user->tasks as $task)
                        <li>{{ $task->tasks }} <a href="/task/{{$task->id}}">Delete</a> </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
