@extends('app')
@section('title')
    Add post
@endsection
@section('content')
    <h1 class=" mt-3" style="text-align: center">Add Post</h1>
    @include('posts.errors')
    <form action="{{route('posts.store')}}" method="POST">
        @csrf

        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Title</label>
            <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="body">{{ old('body') }}</textarea>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add post</button>
    </form>
@endsection

