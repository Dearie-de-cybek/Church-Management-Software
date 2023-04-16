@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div>
        <a href="{{ route('dashboard.event-category.eventCategory') }}"><button class="btn btn-outline-info btn-sm"><i class="bi bi-plus"></i> Add Event Categories</button></a>
    </div>
    <h1 class="text-center"><strong>All Event Categories</strong></h1>
    <table id="myTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Time Created</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr style="background: none">
                    <td> {{ $category->created_at }} </td>
                    <td> {{ $category->name }} </td>
                    <td> {{ $category->slug }} </td>
                    <td>
                        <a href="{{ route('dashboard.event-category.edit-event-category', $category->id) }}"><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i>Edit</button></a>
                        <a href="{{ route('dashboard.event-category.delete-event', $category->id) }}"><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i>Delete</button></a>
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
