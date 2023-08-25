@extends('layouts.dashboard')




@section('content')
    <h1 class="text-center"><strong >Add Prayer</strong></h1>
    <div class="container">
        <form method="POST" action="{{ route('dashboard.prayer.prayer') }}" enctype="multipart/form-data">
            @csrf
            <label for="prayer1" class="form-label">Prayer1: </label>
            <textarea type="text" name="prayer1" id="prayer1" class="form-control" required></textarea>
 
            <label for="prayer2" class="form-label">Prayer2: </label>
            <textarea type="text" name="prayer2" id="prayer2" class="form-control" required></textarea>
 
            <label for="prayer3" class="form-label">Prayer3: </label>
            <textarea type="text" name="prayer3" id="prayer3" class="form-control" required></textarea>
 
            <label for="prayer4" class="form-label">Prayer4: </label>
            <textarea type="text" name="prayer4" id="prayer4" class="form-control" required></textarea>

            <label for="day" class="form-label">Day: </label>
            <select name="day" id="day" class="form-select">
                <option value="">Select The Day for Devotion</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
 
            <label for="date" class="form-label">Date:</label>
            <input type="date" name="date" id="date" class="form-control" required>

            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
        </form>
    </div>
@endsection
