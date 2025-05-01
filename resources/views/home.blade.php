@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <br>
                        <a href="/author/blog">Blog</a>
                        <br>
                        <a href="/author/create">Create Blog</a>
                        <br>
                        <a href="/author/about">About</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
