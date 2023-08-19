@extends('layouts.dashboard')
{{-- opening prayer
topic
bible text
memory verse
devotion
closing prayer --}}
@section('content')
    <div class="container">
        <h1 class="text-center"><strong>All Events</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Opening Prayer</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Bible Text</th>
                    <th scope="col">Memory Verse</th>
                    <th scope="col">Devotion</th>
                    <th scope="col">Closing Prayer</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($devotionals as $devotional)
                    <tr style="background: none">
                        <td> {{ $devotional->created_at }} </td>
                        <td> {{ $devotional->opening_prayer }} </td>
                        <td> {{ $devotional->topic }} </td>
                        <td> {{ $devotional->bible_text }} </td>
                        <td> {{ $devotional->memory_verse }} </td>
                        <td> {{ $devotional->devotion }} </td>
                        <td> {{ $devotional->closing_prayer }} </td>
                        <td> {{ $devotional->date }} </td>
                        <td>
                            <a href="{{ route('dashboard.devotion.edit-devotion', $devotional->id) }}"><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="{{ route('dashboard.devotion.delete-devotion', $devotional->id) }}"><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
        $('#myTable').DataTable();
        });
    </script>
@endsection
