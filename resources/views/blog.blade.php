@extends('layout')
@section('title')
    Blog
@endsection

@section('content')
    <h2>บทความทั้งหมด</h2>
    <hr>
    @foreach ($blogs as $item)
    <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['content'] }}</p>
        @if ($item['status'] == true)
            <p class="text text-success">Publish</p>
            <hr>
        @else
            <p class="text text-danger">Private</p>
            <hr>
        @endif
    @endforeach
@endsection
