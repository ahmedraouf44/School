@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edit Student</h1>
    <hr><br>
    <form action="{{url('Students').'/'.$student->sid}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" value="{{$student->email}}" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" value="{{$student->pass}}" placeholder="Password">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-4">
                <select class="form-control" name="class">
                    @foreach($class as $c)
                        <option value="{{$c->cid}}" @if($c->cid = $student->c_id) selected @endif>
                            {{$c->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Bus</label>
            <div class="col-sm-4">
                <select class="form-control" name="bus">
                    @foreach($bus as $b)
                        <option value="{{$b->bid}}" @if($b->bid = $student->b_id) selected @endif>
                            {{$b->number}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

@endsection