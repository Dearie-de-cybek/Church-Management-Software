<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">z
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"
        type="text/javascript"></script>
    <script language="JavaScript"
        src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"
        type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{ asset('assets/css/table.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center">Worship Arcade Community Church</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive text-nowrap">
                    <h5 class="card-header">Members Payment Details</h5>
                    <table id="datatable" class="table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Payment Type</th>
                                <th>Time Payed</th>
                                <th>Status</th>
                                <th>Edit Status</th>
                            </tr>
                        </thead>



                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>Dearie Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><span class="badge bg-label-warning me-1">Active</span></td>

                                <td>
                                    <form action="">
                                      <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                          <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bi bi-check2-circle"></i> Edit
                                          </a>
                                          <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bi bi-x-circle"></i> Delete
                                          </a>
                                        </div>
                                      </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><span class="badge bg-label-success me-1">Active</span></td>

                                <td>
                                  <form action="">
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-check2-circle"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-x-circle"></i> Delete
                                        </a>
                                      </div>
                                    </div>
                                  </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><span class="badge bg-label-info me-1">Active</span></td>

                                <td>
                                  <form action="">
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-check2-circle"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-x-circle"></i> Delete
                                        </a>
                                      </div>
                                    </div>
                                  </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><span class="badge bg-label-info me-1">Active</span></td>

                                <td>
                                  <form action="">
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-check2-circle"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-x-circle"></i> Delete
                                        </a>
                                      </div>
                                    </div>
                                  </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><span class="badge bg-label-danger me-1">Active</span></td>

                                <td>
                                  <form action="">
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-check2-circle"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                          <i class="bi bi-x-circle"></i> Delete
                                        </a>
                                      </div>
                                    </div>
                                  </form>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>

</html>
