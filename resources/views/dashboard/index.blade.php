@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Payment Type</th>
                    <th scope="col">Time Payed</th>
                    <th scope="col">Status</th>
                    <th scope="col">Validate</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($payments as $payment)
                @php
                    $id= $payment->id   
                @endphp
                    <tr>
                        <td> {{ $payment->name }} </td>
                        <td> {{ $payment->amount }} </td>
                        <td> {{ $payment->payment }} </td>
                        <td> {{ $payment->created_at }} </td>
                        <td>
                            <button class="btn btn-sm btn-primary"> {{ $payment->status }} </button>
                        </td>
                        <td>
                            <!-- Basic Modal -->
                                {{-- <a href="" type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
                                    Validate
                                </a>
                                <div class="modal fade" id="basicModal" tabindex="-1">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Finalize Payment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <a href="{{ route('dashboard.approve', $payment->id) }}" class="btn btn-sm btn-outline-success">Approve</a>
                                            <a href="{{ route('dashboard.decline', $payment->id) }}" class="btn btn-sm btn-outline-danger">Decline</a> <hr>
                                            <small class="text-danger">Note: This change cannot be reversed </small>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-outline-primary btn-sm">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div> --}}
                            <!-- End Basic Modal-->
                            <a href="{{ route('dashboard.approve', $payment->id) }}" class="btn btn-sm btn-outline-success" onclick="geek()">Approve</a>
                            <a href="{{ route('dashboard.decline', $payment->id) }}" class="btn btn-sm btn-outline-danger" onclick="geek()">Decline</a>
 
                            <script>
                                function geek() {
                                    confirm(`All you sure you want to Finalize the Payment Note: This change cannot be reversed`);
                                }
                            </script>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection