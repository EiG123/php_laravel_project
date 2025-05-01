@extends('layouts.app')
@section('title')
    เขียนบทความ
@endsection

@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    <form type="text" method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">Blog Name</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="content">Blog Content</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text text-danger">{{$message}}</span>
            </div>
        @enderror
        <input type="submit" value="save" class="btn btn-primary my-3">
        <a href="{{route('blog')}}" class="btn btn-success my-3">Blogs</a>
    </form>
@endsection
