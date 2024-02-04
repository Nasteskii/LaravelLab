@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center m-3">Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add Post</a>
        @foreach ($posts ?? [] as $post)
            <div class="card mb-5">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-center mb-0">{{ $post->title }}</h4>
                </div>
                <div class="card-body d-flex flex-column flex-wrap">
                    <h5 class="mb-2">{{ $post->body }}</h5>
                    @if(Auth::user()->role == 'author' || Auth::user()->role == 'admin' || Auth::user() == $post->user)
                        <div class="align-self-end col-3 d-flex flex-wrap justify-content-end">
                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                               class="btn btn-outline-secondary me-1">Edit</a>
                            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger w-100 "
                                        onclick="return confirm('Are you sure you want to delete this post?')">Delete
                                </button>
                            </form>
                        </div>
                    @endif
                    <div class="card col-3 mt-5 text-center align-self-end">
                        <div class="card-header bg-secondary-subtle">Author: {{ $post->user->name }}</div>
                        <div class="card-body">
                            <p class="m-0">Published on: {{ $post->published_on }}</p>
                            <p class="m-0">Last modified: {{ $post->last_modified }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>Comments: {{sizeof($post->comments)}}</h5>
                    @foreach ($post->comments ?? [] as $comment)
                        <div class="card my-3">
                            <div class="card-header bg-primary-subtle">
                                {{ $comment->fromUser->name }}
                            </div>
                            <div class="card-body p-2">
                                <p class="mb-0">{{ $comment->body }}</p>
                                <p class="mb-0 mt-4">Posted on: {{ $comment->at_time }}</p>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('posts.comments.create', ['post' => $post->id]) }}"
                       class="btn bg-primary-subtle mt-3">Add
                        Comment</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
