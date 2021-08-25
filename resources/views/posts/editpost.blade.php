@extends('app')
@section('title')
    Add post
@endsection
@section('content')
    <h1 class=" mt-3" style="text-align: center">Edit Post</h1>
    @if(Session::has('msg'))
        <div class="alert alert-success" role="alert">
            {{Session::get("msg")}}
        </div>
    @endif
    <form action="{{route('posts.update',$post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mt-3"  >
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title" value=" {{$post->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3">{{$post->body}}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection

