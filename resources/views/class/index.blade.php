@extends('layouts.app')

@section('content')
<h1 class='text-center my-5'>Students</h1>
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Students
                </div>
                <div class="card-body">
                    <ul class='list-group'>
                        @foreach ($students as $student)
                        <li class='list-group-item'>
                            {{$student->name}}
                        <a href="/students/{{$student->id}}" class="btn btn-primary btn-sm float-right">View</a>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
      </div>

@endsection
