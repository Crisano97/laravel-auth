@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <a href="#">
                                        {{ $post->author }}    
                                    </a>
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">
                                        Edit
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger">
                                        Delete
                                    </a>
                                </td>
                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan=7>non sono disponibili post</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection