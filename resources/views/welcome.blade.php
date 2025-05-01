@extends('layouts.app')
@section('title')
    Welcome
@endsection
@section('content')
    <h1 class="text text-center">Welcome to My Laravel Project</h1>
    <p class="text text-center">ยินดีต้อนรับทุกท่านสู่ My Larevel Project</p>
    <hr>
    <h2 class="text text-center">Last Content Update</h2>
    <hr>
    @foreach ($blogs as $item)
        <h2>{{$item->title}}</h2>
        <p>{{Str::limit($item->content, 100)}}</p>
        <a href="/detail/{{$item->id}}">Detail</a>
        <hr>
    @endforeach
@endsection
