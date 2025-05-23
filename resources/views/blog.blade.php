@extends('layouts.app')
@section('title')
    Blog
@endsection

@section('content')
    @if (count($blogs) > 0)
        <h2 class="text text-center py-2">บทความทั้งหมด</h2>
        <table class="table table-bordered text-center ">
            <thead>
                <tr>
                    <th scope="col">Blog</th>
                    <th scope="col">Content</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit Content</th>
                    <th scope="col">Delete Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->content, 10) }}</td>
                        <td>
                            @if ($item->status == true)
                                <a href="{{ route('change', $item->id) }}" class="btn btn-success">Publish</a>
                            @else
                                <a href="{{ route('change', $item->id) }}" class="btn btn-warning">Private</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-primary">
                                Edit
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                                onclick="return confirm('Confirm to Delete {{ $item->title }} Content ?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs->links() }}
    @else
        <h2 class="text text-center py-2">Not Found Content</h2>
    @endif
@endsection
