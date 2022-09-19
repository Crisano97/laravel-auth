@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card text-center">
                {{-- <a href="" class="btn btn-sm btn-success">Edit this Post</a>
                <form action="{{ route('admin.posts.edit', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-sm btn-danger">Delete this Post</button>
                </form> --}}
                <img src="{{ $post->post_image }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <span>{{ $post->author }}</span>
                    <span>{{ $post->post_date }}</span>

                    <p class="card-text">{{ $post->post_content }}</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection