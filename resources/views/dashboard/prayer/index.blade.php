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
                    <th scope="col">Prayer</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($prayers as $prayer)
                    <tr style="background: none">
                        <td> {{ $prayer->created_at }} </td>
                        <td> {{ $prayer->prayer }} </td>
                        <td>
                            <a href="{{ route('dashboard.prayer.edit-prayer', $prayer->id) }}"><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="{{ route('dashboard.prayer.delete-prayer', $prayer->id) }}"><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i>Delete</button></a>
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
