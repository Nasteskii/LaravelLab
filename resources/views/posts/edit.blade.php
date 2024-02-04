@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Post</h2>
        <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control bg-white" value="{{ $post->title }}" required>
            </div>

            <div class="form-group my-2">
                <label for="body">Body:</label>
                <textarea name="body" class="form-control bg-white" rows="3" required>{{ $post->body }}</textarea>
            </div>

            <div class="form-group my-2">
                <label for="title">Slug:</label>
                <input type="text" name="slug" class="form-control bg-white" value="{{ $post->slug }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Publish</button>
        </form>
    </div>
@endsection
