@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Classes Page</h1>
        <br>
        <a class="btn btn-primary" href="{{ url('Classes/Add') }}" role="button"><i class="fa fa-plus"></i> Add New class</a>
    </div>
    <hr>
    <table class="table table-bordered text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">Properties</th>
            <th scope="col">Students of Class</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
            <tr>
                <th scope="row">{{$class->cid}}</th>
                <td>{{$class->name}}</td>
                <td>{{$class->properties}}</td>
                <td>
                    <?php $students = $class->students;?>
                     @foreach($students as $student)
                        <a class="btn btn-block" href="{{'Students/'.$student->sid.'/Edit'}}">
                            {{$student->name}} <br>
                        </a>
                     @endforeach
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>



@endsection