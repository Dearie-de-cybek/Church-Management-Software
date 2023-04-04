@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>All Events</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $event)
                    <tr style="background: none">
                        <td> {{ $event->created_at }} </td>
                        <td> {{ $event->title }} </td>
                        <td> {{ $event->description }} </td>
                        <td> {{ $event->slug }} </td>
                        <td>
                            <a href=""><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href=""><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i>Delete</button></a>
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
