@extends('layout.main')

@section('content')
<div class="container" id="main-container">
    
    <div class="page-header">
        <h2>New Category</h2>
    </div>
    
    @if( Session::has('status') )
    <div class="alert bg-success notification">
        {{Session::get('status')}}
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger notification">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div>
        <form class="form-horizontal" method="post" action="{{route('update_personal_info')}}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required/>
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Profile Picture</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="profile_pic" id="fileToUpload">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
