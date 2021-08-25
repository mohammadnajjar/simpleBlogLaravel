@extends('app')
@section('title')
    Add post
@endsection
@section('content')
    <h1 class=" mt-3" style="text-align: center">Add Post</h1>
    @if(Session::has('msg'))
    <div class="alert alert-success" role="alert">
    {{Session::get("msg")}}
    </div>
    @endif
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add post</button>
    </form>
@endsection

