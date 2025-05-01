@extends('layout')
@section('title')
    แก้ไขบทความ
@endsection

@section('content')
    <h2 class="text text-center py-2">แก้ไขบทความใหม่</h2>
    <form type="text" method="POST" action="{{route('update', $blog->id)}}">
        @csrf
        <div class="form-group">
            <label for="title">Blog Name</label>
            <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text text-danger">{{ $message }}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="content">Blog Content</label>
            <textarea name="content" cols="30" rows="5" class="form-control">{{ $blog->content }}</textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text text-danger">{{ $message }}</span>
            </div>
        @enderror
        <input type="submit" value="update" class="btn btn-primary my-3">
        <a href="{{ route('blog') }}" class="btn btn-success my-3">Blogs</a>
    </form>
@endsection
