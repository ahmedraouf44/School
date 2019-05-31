@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Students Page</h1>
        <br>
        <a class="btn btn-primary" href="{{ url('Students/Add') }}" role="button"><i class="fa fa-plus"></i> Add New Student</a>
    </div>
    <hr>
    <table class="table table-bordered text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Class</th>
            <th scope="col">Bus</th>
            <th scope="col" style="width: 25%;">Control</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <th scope="row">{{$student->sid}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->classes->name}}</td>
                <td>{{$student->buses->number}}</td>
                {{--<td> @foreach($class as $c)--}}
                        {{--@if($c->cid == $student->c_id)--}}
                            {{--{{$c->name}}--}}
                        {{--@endif--}}
                    {{--@endforeach </td>--}}
                {{--<td>@foreach($bus as $b)--}}
                        {{--@if($b->bid == $student->b_id)--}}
                            {{--{{$b->number}}--}}
                        {{--@endif--}}
                    {{--@endforeach</td>--}}
                {{--<td>--}}
                <td>
                    <a class="btn btn-primary float-left mr-2" href="{{'Students/'.$student->sid.'/Edit'}}" role="button"><i class="fa fa-edit"></i> Edit</a>
                    <form action="{{url('Students').'/'.$student->sid}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger float-left"><i class="fa fa-trash-alt"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection