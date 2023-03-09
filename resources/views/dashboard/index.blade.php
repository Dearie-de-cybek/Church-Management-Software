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
                {{-- <input type="text" name="payment_type" id="payment_type" class="form-control" required> --}}
                <select class="form-select mb-3" aria-label=".form-select-lg example" name="payment_type" required>
                    <option selected>Select Your Payment Type</option>
                    <option value="Offering">Offering</option>
                    <option value="Prophetic Seed">Prophetic Seed</option>
                    <option value="Tithe">Tithe</option>
                    <option value="Church Project">Church Project</option>
                </select>


                <input type="text" name="status" id="Status" value="Pending" class="form-control" hidden>

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
            </form>
        </div>
    {{-- ------------------ Payment Form ------------------- --}}

    {{-- ------------------ News ------------------- --}}
    <h1 class="mt-5"><strong class="text-center">News</strong></h1>
        <div class="container">
            <form method="POST" action="{{ route('dashboard.new') }}" enctype="multipart/form-data">
                @csrf
                <label for="title" class="form-label">Title: </label>
                <input type="text" name="title" id="title" class="form-control" required>

                <label for="description" class="form-label">Description: </label>
                <textarea type="text" name="description" id="description" class="form-control" required></textarea>

                <label for="slug" class="form-label">Slug: </label>
                <input type="text" name="slug" id="slug" class="form-control" required>

                <label for="image" class="form-label">Image: </label>
                <input type="file" name="image" id="image" value="Pending" class="form-control">

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
            </form>
        </div>
    {{-- ------------------ News ------------------- --}}

    {{-- ------------------ News View ------------------- --}}
        <div class="row mt-5">
            @foreach ($news as $new)
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="card shadow shadow-lg p-3">
                        <p><strong>{{$new->title}}</strong></p>
                        <img src="{{asset('storage/'.$new->image)}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                        <p class="card-text">{{$new->description}}</p>
                        <button id="like-btn" class="btn btn-light bi bi-hand-thumbs-up"> Like</button>
                        <button id="like-btn" class="btn btn-light bi bi-chat"> Comment</button>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    {{-- ------------------ News View ------------------- --}}

    {{-- ------------------ Semons ------------------- --}}
        <h1><strong class="text-center">Semon Form</strong></h1>
        <div class="container">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label">Name: </label>
                <input type="text" name="name" id="name" class="form-control" required>

                <label for="author" class="form-label">Author: </label>
                <input type="text" name="author" id="author" class="form-control" required>

                <label for="duration" class="form-label">Duration: </label>
                <input type="number" name="duration" id="duration" class="form-control" required>

                <label for="data" class="form-label">Date: </label>
                <input type="date" name="data" id="data" value="Pending" class="form-control" required>

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
            </form>
        </div>
    {{-- ------------------ Semons ------------------- --}}




@endsection
