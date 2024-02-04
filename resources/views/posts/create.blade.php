@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create a New Post</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group my-2">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control bg-white" required>
            </div>
            <div class="form-group my-2">
                <label for="content">Body:</label>
                <textarea name="body" class="form-control bg-white" rows="4" required></textarea>
            </div>
            <div class="form-group my-2">
                <label for="title">Slug:</label>
                <input type="text" name="slug" class="form-control bg-white">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Publish</button>
        </form>
    </div>
@endsection
