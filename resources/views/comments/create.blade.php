@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add comment</h2>
        <form action="{{ route('posts.comments.store', ['post' => $post->id]) }}" method="POST">
            @csrf
            <input type="number" name="on_post" class="form-control bg-white" hidden value="{{ $post->id }}">
            <div class="form-group my-2">
                <label for="content">Body:</label>
                <textarea name="body" class="form-control bg-white" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Add Comment</button>
        </form>
    </div>
@endsection
