@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>All Prayers</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Created At</th>
                    <th scope="col">Prayer1</th>
                    <th scope="col">Prayer2</th>
                    <th scope="col">Prayer3</th>
                    <th scope="col">Prayer4</th>
                    <th scope="col">Date</th>
                    <th scope="col">Day</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($prayers as $prayer)
                    <tr style="background: none">
                        <td> {{ $prayer->created_at }} </td>
                        <td> {{ $prayer->prayer1 }} </td>
                        <td> {{ $prayer->prayer2 }} </td>
                        <td> {{ $prayer->prayer3 }} </td>
                        <td> {{ $prayer->prayer4 }} </td>
                        <td> {{ $prayer->day }} </td>
                        <td> {{ $prayer->date }} </td>
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
