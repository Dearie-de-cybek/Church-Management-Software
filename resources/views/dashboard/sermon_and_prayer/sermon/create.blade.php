@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center"><strong >Add Sermon</strong></h1>
    <div class="container">
        <form method="POST" action="{{ route('dashboard.sermon.sermons') }}" enctype="multipart/form-data">
            @csrf
            <label for="name" class="form-label">Name: </label>
            <input type="text" name="name" id="name" class="form-control" required>

            <label for="author" class="form-label">Author: </label>
            <input type="text" name="author" id="author" class="form-control" required>

            <label for="duration" class="form-label">Duration: </label>
            <input type="number" name="duration" id="duration" class="form-control" required>

            <label for="date" class="form-label">Date: </label>
            <input type="date" name="date" id="date" class="form-control" required>

            <label for="audio" class="form-label">Audio: </label>
            <input type="file" name="audio" id="audio" class="form-control" required>

            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
        </form>
    </div>
@endsection
