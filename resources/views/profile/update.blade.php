@extends('layouts.back')

@section('content')

    <form action="{{url('update')}}" method="post" enctype="multipart/form-data">
   @csrf
    <div class="card-body">
        <div class="form-group">
            <input type="hidden"  value="{{$profile->id}}" name="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">profile name</label>
            <input type="text" value="{{ $profile->profile_name }}" class="form-control" name="profile_name"  placeholder="profile name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">phone</label>
            <input type="text"  value="{{ $profile->phone}}" class="form-control" name="phone"  placeholder="phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">FB</label>
            <input type="text"  value="{{ $profile->fb}}" name="fb" class="form-control"  placeholder="FB">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Linkedin</label>
            <input type="text"  value="{{ $profile->linkedin }}" name="linkedin" class="form-control" placeholder="Linkedin">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text"  value="{{ $profile->email}}" name="email" class="form-control"  placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Github</label>
            <input type="text"  value="{{ $profile->github }}" name="github" class="form-control"  placeholder="Github">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  value="{{ $profile->profile_pic}}" name="profile_pic" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">update</button>
    </div>
    </form>


@endsection
