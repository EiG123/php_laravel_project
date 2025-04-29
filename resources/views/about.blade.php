@extends('layout')
@section('title')
    About
@endsection
@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <p>Developer : {{$name}}</p>
    <p>ผู้พัฒนาระบบ : {{$Thainame}}</p>
    <p>Date : {{$date}}</p>
    <p>วันเริ่มต้น : {{$date}}</p>
@endsection