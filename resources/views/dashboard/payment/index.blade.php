@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                    <p class="card-text"><strong>Offering</strong></p>
                    <h3 class="card-text">&#x20A6;{{$offerings}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                    <p class="card-text"><strong>Tithe</strong></p>
                    <h3 class="card-text">&#x20A6;{{$tithes}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                    <p class="card-text"><strong>Church Project</strong></p>
                    <h3 class="card-text">&#x20A6;{{$churchProjects}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                    <p class="card-text"><strong>Prophetic Seeds</strong></p>
                    <h3 class="card-text">&#x20A6;{{$propheticSeeds}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                    <p class="card-text"><strong>Totals Revenue</strong></p>
                    <h3 class="card-text">&#x20A6;{{$propheticSeeds + $churchProjects + $offerings + $tithes}}</h3>
                    </div>
                </div>
            </div>
        <div>
    </div>

    <div class="container">
        <h1 class="text-center mt-5"><strong>All Payment Record</strong></h1>
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
                            <a href="{{ route('dashboard.approve', $payment->id) }}" class="btn btn-sm btn-outline-success m-1" >Approve</a>
                            <a href="{{ route('dashboard.decline', $payment->id) }}" class="btn btn-sm btn-outline-danger m-1" >Decline</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <canvas id="pieChart" style="max-height: 400px;"></canvas>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        new Chart(document.querySelector('#pieChart'), {
        type: 'pie',
        data: {
            labels: [
            'Tithe',
            'Offering',
            'Church Project',
            'Prophetic Seed'
            ],
            datasets: [{
            label: 'My First Dataset',
            data: [
                @php
                    $totals = [$tithes, $offerings, $churchProjects, $propheticSeeds];


                    foreach ($totals as $total) {
                        echo $total . ",";
                    }
                @endphp

            ],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(0,255,255)'
            ],
            hoverOffset: 4
            }]
        }
        });
    });
    </script>

    
















    <script>
        $(document).ready(function() {
        $('#myTable').DataTable();
        });

    </script>
@endsection
