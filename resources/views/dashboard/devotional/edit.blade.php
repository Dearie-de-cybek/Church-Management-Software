@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center"><strong >Edit Devotion</strong></h1>
    <div class="container">
        <form method="POST" action="{{ route('dashboard.devotion.update-devotion', $devotion->id) }}" enctype="multipart/form-data">
            @csrf
            <label for="opening_prayer" class="form-label">Opening Prayer: </label>
            <textarea type="text" name="opening_prayer" id="opening_prayer" class="form-control" required></textarea>

            <label for="topic" class="form-label">Topic: </label>
            <input type="text" name="topic" id="topic" class="form-control" required>

            <label for="bible_text" class="form-label">Bible Text: </label>
            <input type="text" name="bible_text" id="bible_text" class="form-control" required>

            <label for="memory_verse" class="form-label">Memory Verse: </label>
            <input type="text" name="memory_verse" id="memory_verse" class="form-control" required>
            
            <label for="devotion" class="form-label">Devotion: </label>
            <textarea type="text" name="devotion" id="devotion" class="form-control" required></textarea>
            
            <label for="closing_prayer" class="form-label">Closing Prayer: </label>
            <textarea type="text" name="closing_prayer" id="closing_prayer" value="Pending" class="form-control"></textarea>

            <label for="date" class="form-label">Date: </label>
            <input type="date" name="date" id="date" class="form-control" required>

            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
        </form>
    </div>
@endsection
