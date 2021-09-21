@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Enter new student details.</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">New Student</div>
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
                    <form action="/student-create" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="details" id="" cols="5" rows="5" placeholder="Enter student details" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
