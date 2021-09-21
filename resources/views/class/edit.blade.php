@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Edit student details.</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Student</div>
                <div class="card-body">
                    @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                        </ul>
                    </div>

                    @endif
                    <form action="/class/{{$student->id}}/edit" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" value="{{$student->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <textarea name="details" id="" cols="5" rows="5" placeholder="Enter student details" class="form-control">{{$student->details}}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Edit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
