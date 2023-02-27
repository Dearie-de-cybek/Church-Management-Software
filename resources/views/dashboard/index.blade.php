@extends('layouts.dashboard')

@section('content')
    <div class="container">
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
                            <a href="{{ route('dashboard.approve', $payment->id) }}" class="btn btn-sm btn-outline-success m-1" onclick="geek()">Approve</a>
                            <a href="{{ route('dashboard.decline', $payment->id) }}" class="btn btn-sm btn-outline-danger m-1" onclick="geek()">Decline</a>

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

    {{-- ------------------ Payment Form ------------------- --}}
        <h1><strong class="text-center">Payment Form</strong></h1>
        <div class="container">
            <form method="POST" action="{{ route('user.pay') }}" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label">Name: </label>
                <input type="text" name="name" id="name" class="form-control" required>

                <label for="amount" class="form-label">Amount: </label>
                <input type="text" name="amount" id="amount" class="form-control" required>

                <label for="payment_type" class="form-label">Payment Type: </label>
                <input type="text" name="payment_type" id="payment_type" class="form-control" required>


                <input type="text" name="status" id="Status" value="Pending" class="form-control" hidden>

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
            </form>
        </div>
    {{-- ------------------ Payment Form ------------------- --}}

    {{-- ------------------ News and Event Form ------------------- --}}
    <h1 class="mt-5"><strong class="text-center">News and Event Form</strong></h1>
        <div class="container">
            <form method="POST" action="{{ route('dashboard.new') }}" enctype="multipart/form-data">
                @csrf
                <label for="title" class="form-label">Title: </label>
                <input type="text" name="title" id="title" class="form-control" required>

                <label for="description" class="form-label">Description: </label>
                <input type="text" name="description" id="description" class="form-control" required>

                <label for="slug" class="form-label">Slug: </label>
                <input type="text" name="slug" id="slug" class="form-control" required>

                <label for="image" class="form-label">Image: </label>
                <input type="file" name="image" id="image" value="Pending" class="form-control">

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
            </form>
        </div>
    {{-- ------------------ News and Event Form ------------------- --}}

    {{-- ------------------ News and Event Form View ------------------- --}}
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    {{-- ------------------ News and Event Form View ------------------- --}}


@endsection
