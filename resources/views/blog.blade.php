@extends('layout')
@section('title')
    Blog
@endsection

@section('content')
    <h2 class="text text-center py-2">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center table-dark">
        <thead>
            <tr>
                <th scope="col">Blog</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>
                        @if ($item['status'] == true)
                            <a href="#" class="btn btn-success">Publish</a>
                        @else
                            <a href="#" class="btn btn-warning">Private</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
