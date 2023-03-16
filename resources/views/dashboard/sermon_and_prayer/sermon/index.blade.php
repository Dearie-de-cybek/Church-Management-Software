@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1 class="text-center"><strong>All Sermons</strong></h1>
    <table id="myTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Date Created</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Duration</th>
                <th scope="col">Date</th>
                <th scope="col">Audio</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($sermons as $sermon)
                <tr style="background: none">
                    <td> {{ $sermon->created_at }} </td>
                    <td> {{ $sermon->name }} </td>
                    <td> {{ $sermon->author }} </td>
                    <td> {{ $sermon->duration }} mins </td>
                    <td> {{ $sermon->date }} </td>
                    <td>
                        <audio controls>
                            <source src="{{asset('storage/'.$sermon->audio)}}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </td>
                    {{-- <td>{{$sermon->audio}}</td> --}}
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
