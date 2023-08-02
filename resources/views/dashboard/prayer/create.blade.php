@extends('layouts.dashboard')




@section('content')
    <h1 class="text-center"><strong >Add Prayer</strong></h1>
    <div class="container">
        <form method="POST" action="{{ route('dashboard.prayer.prayer') }}" enctype="multipart/form-data">
            @csrf
            <label for="prayer" class="form-label">Prayer: </label>
            <textarea type="text" name="prayer" id="prayer" class="form-control" required></textarea>

            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
        </form>
    </div>
@endsection
