<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-lg-5 p-md-5 ">
                                <div class="text-center ">
                                    <h1 class="text-dark mt-2"><i class="bi bi-person-fill-lock"></i><strong> Admin Login</strong></h1>
                                </div>
                                <form method="POST" action="{{ route('loginUser') }}" class="p-lg-5 p-md-5 p-3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                    @error('email')
                                        <small class="text-danger"> {{ $message }}</small>
                                    @enderror
                                    </div>

                                    <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                    @error('password')
                                        <small class="text-danger"> {{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                    </div>
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                </form>
                                {{-- <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div> --}}
                                <div class="text-center mb-3"><a class="small text-decoration-none fs-6" href="{{ route('register') }}">Create an Account!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>