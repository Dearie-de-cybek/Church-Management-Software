@extends('layouts.dashboard')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('dashboard.event-category.update-event-category', $eventCategory->id) }}" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Name: </label>
        <input type="text" name="name" id="name" class="form-control" required>

        <label for="slug" class="form-label">Slug: </label>
        <input type="text" name="slug" id="slug" class="form-control" required>

        <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
    </form>
</div>
@endsection