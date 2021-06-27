@extends('students.layout')

@section('content')

    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td># ID</td>
                <td>First name</td>
                <td>Last name</td>
                <td>Course</td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->course}}</td>
                    <td class="text-center">
                        <a href="{{ route('students.edit', $student->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection