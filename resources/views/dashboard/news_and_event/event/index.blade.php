@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>All News</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Time Payed</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($news as $new)
                    <tr style="background: none">
                        <td> {{ $new->created_at }} </td>
                        <td> {{ $new->title }} </td>
                        <td> {{ $new->description }} </td>
                        <td> {{ $new->slug }} </td>
                        <td> <img src="{{asset('storage/'.$new->image)}}" class="img-fluid" alt=""> </td>
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
