@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                <p class="card-text"><strong>Church Project</strong></p>
                <h3 class="card-text">&#x20A6;{{$churchProjects}}</h3>
                </div>
            </div>
        </div>
    <div>

    <div class="container mt-5">
        <h1 class="text-center"><strong>Church Project Payments</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Time Payed</th>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Payment Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Validate</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($payments as $payment)
                @php
                    $id= $payment->id
                @endphp
                    @if ($payment->payment == "Church Project")


                    <tr style="background: none">
                        <td> {{ $payment->created_at }} </td>
                        <td> {{ $payment->name }} </td>
                        <td> {{ $payment->amount }} </td>
                        <td> {{ $payment->payment }} </td>
                        <td>
                            @if ($payment->status == "Approved")
                                <button class="btn btn-sm btn-success"> {{ $payment->status }} </button>

                            @elseif ($payment->status == "Decline")
                                <button class="btn btn-sm btn-danger"> {{ $payment->status }} </button>
                            @else
                                <button class="btn btn-sm btn-primary"> {{ $payment->status }} </button>
                            @endif

                        </td>
                        <td>
                            <a href="{{ route('dashboard.approve', $payment->id) }}" class="btn btn-sm btn-outline-success m-1" onclick="geek()">Approve</a>
                            <a href="{{ route('dashboard.decline', $payment->id) }}" class="btn btn-sm btn-outline-danger m-1" onclick="geek()">Decline</a>

                            <script>
                                function geek() {
                                    confirm(`All you sure you want to Finalize the Payment Note: This change cannot be reversed`);
                                }
                            </script>
                        </td>
                    </tr>
                    @endif
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
