

@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update User</h3>
        {{-- @if(session('errors1'))
            <div>
                {{session('errors1')}}
            </div>
            @endif --}}
        @php
        if(count($errors) > 0){
            echo "<p class='alert alert-danger'>Error: $errors[0]</p>";
        }
        @endphp
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ url('admin/user/postUpdate/'.$user->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Name</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Name" value="{{$user->name}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Email</label>
                <input type="text" class="form-control" id="txt-name" name="email" placeholder="Email" value="{{$user->email}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Password</label>
                <input type="password" class="form-control" id="txt-name" name="password" placeholder="Password" value="{{$user->password}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>

   



@endsection