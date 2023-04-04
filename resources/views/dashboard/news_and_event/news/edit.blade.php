@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center"><strong >Add News</strong></h1>
    <div class="container">
        <form method="POST" action="{{ route('dashboard.news.update-news', $news->id) }}" enctype="multipart/form-data">
            @csrf
            <label for="title" class="form-label">Title: </label>
            <input type="text" name="title" id="title" class="form-control" placeholder="{{$news->title}}" required>

            <label for="description" class="form-label">Description: </label>
            <textarea type="text" name="description" id="description" class="form-control" required></textarea>

            <label for="slug" class="form-label">Slug: </label>
            <input type="text" name="slug" id="slug" class="form-control" placeholder="{{$news->slug}}" required>

            <label for="image" class="form-label">Image: </label>
            <input type="file" name="image" id="image" value="Pending" class="form-control">

            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
        </form>
    </div>
@endsection
