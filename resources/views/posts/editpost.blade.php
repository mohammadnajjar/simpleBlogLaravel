@extends('app')
@section('title')
    Add post
@endsection
@section('content')
    <h1 class=" mt-3" style="text-align: center">Edit Post</h1>
    @include('posts.errors')
    <form action="{{route('posts.update',$post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mt-3"  >
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" name="title" value=" {{$post->title}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="exampleFormControlTextarea1" name="body" rows="3">{{$post->body}}</textarea>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection

