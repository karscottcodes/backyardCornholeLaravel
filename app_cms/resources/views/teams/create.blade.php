@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add A Team
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('teams.store') }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="team_name" class="form-label">Team Name</label>
                <input type="text" class="form-control" id="team_name" name="team_name" aria-describedby="team_name">
            </div>
            <div class="mb-3">
                <label for="img_src" class="form-label">Team Logo Source</label>
                <input type="text" class="form-control" id="img_src" name="img_src" aria-describedby="img_src">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
