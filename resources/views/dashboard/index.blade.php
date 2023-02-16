@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <table class="table">
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
                <tr>
                    <td>Brandon Jacob</td>
                    <td>20000</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td><button class="btn btn-sm btn-primary">Pending</button></td>
                    <td>
                        <!-- Basic Modal -->
                    <a href="" type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
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
                                <a href="" class="btn btn-sm btn-outline-success">Approve</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Decline</a> <hr>
                                <small class="text-danger">Note: This change cannot be reversed </small>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary btn-sm">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Basic Modal-->
                    </td>
                </tr>
                <tr>
                    <td>Bridie Kessler</td>
                    <td>25000</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                    <td><button class="btn btn-sm btn-primary">Pending</button></td>
                    <td>
                        <!-- Basic Modal -->
                    <a href="" type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
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
                                <a href="" class="btn btn-sm btn-outline-success">Approve</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Decline</a> <hr>
                                <small class="text-danger">Note: This change cannot be reversed </small>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary btn-sm">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Basic Modal-->
                    </td>
                </tr>
                <tr>
                    <td>Ashleigh Langosh</td>
                    <td>15000</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                    <td><button class="btn btn-sm btn-primary">Pending</button></td>
                    <td>
                        <!-- Basic Modal -->
                    <a href="" type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
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
                                <a href="" class="btn btn-sm btn-outline-success">Approve</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Decline</a> <hr>
                                <small class="text-danger">Note: This change cannot be reversed </small>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary btn-sm">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Basic Modal-->
                    </td>
                </tr>
                <tr>
                    <td>Angus Grady</td>
                    <td>20000</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                    <td><button class="btn btn-sm btn-primary">Pending</button></td>
                    <td>
                        <!-- Basic Modal -->
                    <a href="" type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
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
                                <a href="" class="btn btn-sm btn-outline-success">Approve</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Decline</a> <hr>
                                <small class="text-danger">Note: This change cannot be reversed </small>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary btn-sm">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Basic Modal-->
                    </td>
                </tr>
                <tr>
                    <td>Raheem Lehner</td>
                    <td>30000</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                    <td><button class="btn btn-sm btn-primary">Pending</button></td>
                    <td>
                        <!-- Basic Modal -->
                    <a href="" type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
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
                                <a href="" class="btn btn-sm btn-outline-success">Approve</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Decline</a> <hr>
                                <small class="text-danger">Note: This change cannot be reversed </small>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary btn-sm">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Basic Modal-->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection