@auth
@extends('students.layout')

@section('content')


    <div class="card mt-5">
        <div class="card-header">
            Update
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
            <form method="post" action="{{ route('students.update', $student->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="firstName">Firstname</label>
                    <input type="text" class="form-control" name="firstName" value="{{ $student->firstName }}" />
                </div>
                <div class="form-group">
                    <label for="lastName">Lastname</label>
                    <input type="lastName" class="form-control" name="lastName" value="{{ $student->lastName }}" />
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="" class="form-control" name="course" value="{{ $student->course }}" />
                </div>

                <button type="submit" class="btn btn-block btn-danger">Update</button>
            </form>
        </div>
    </div>
@endsection
@endauth