<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Koperasi Login</title>

    <link rel="stylesheet" href="{{ asset('img/logo.png') }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-8" style="margin: auto;">
                                <div class="p-5">
                                    <div class="text-center my-4">
                                        <h5 style="font-weight: bold">Koperasi UP2K-PKK</h5>
                                        <img src="{{ asset('img/logo.png') }}" width="100" alt="">
                                    </div>
                                    <form class="user" action="/login-admin" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    @include('partials.script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          @if (session('error'))
          <script type="text/javascript">
            Swal.fire({
                title: 'Failed',
                text: '{{ session('error') }}',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            </script>
            @endif

            @if (session('success'))
            <script type="text/javascript">
              Swal.fire({
                  title: 'Success!',
                  text: '{{ session('success') }}',
                  icon: 'primary',
                  confirmButtonText: 'OK'
              });
              </script>
            @endif


</body>

</html>
