@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tasks <a href="/create">Add New Task</a>
                </div>

                <div class="card-body">
                    <form action="/p" method="post">

                        <div class="form-group row">
                            @csrf
                            <label for="tasks" class="col-md-4 col-form-label text-md-right">{{ __('tasks') }}</label>

                            <div class="col-md-6">
                                <input id="tasks" type="text" class="form-control @error('tasks') is-invalid @enderror" name="tasks" value="{{ old('tasks') }}" autocomplete="tasks" autofocus>

                                @error('tasks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ __('remarks') }}</label>

                            <div class="col-md-6">
                                <input id="remarks" type="text" class="form-control @error('remarks') is-invalid @enderror" name="remarks" value="{{ old('remarks') }}" autocomplete="remarks" autofocus>

                                @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <input type="submit" value="Create Task" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
