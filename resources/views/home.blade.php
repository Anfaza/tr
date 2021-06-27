@extends('students.layout')

@section('content')

    <div class="card mt-5">
        <div class="card-header">
            Create User
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('students.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="firstName">Name</label>
                    <input type="text" class="form-control" name="firstName"/>
                </div>
                <div class="form-group">
                    <label for="lastName">Lastname</label>
                    <input type="lastName" class="form-control" name="lastName"/>
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="course" class="form-control" name="course"/>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection