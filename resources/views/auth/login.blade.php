<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <!-- Plugins: CSS -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->


    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('Admin/assets/images/favicon.png') }}" />

    <style>
        .panel {display: none;}
    </style>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        {{-- <div class="form-group">
                            <label for="exampleFormControlSelect1">Select</label>
                            <select class="form-control" id="sectionChooser">
                                <option value="" selected disabled>Choose</option>
                                <option value="user">user</option>
                                <option value="admin">admin</option>

                            </select>
                        </div> --}}
                        <form id="user" method="POST" action="{{ route('login') }}">

                        @csrf
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" id="email" name="email" class="form-control p_input">
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" id="password" name="password" class="form-control p_input">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me
                                    </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-facebook mr-2 col">
                                    <i class="mdi mdi-facebook"></i> Facebook
                                </button>
                                <button class="btn btn-google col">
                                    <i class="mdi mdi-google-plus"></i> Google plus
                                </button>
                            </div>
                            <p class="sign-up">Don't have an Account?<a href="{{route('register')}}"> Sign Up</a></p>
                        </form>

                         {{----------------------------------}}
                        {{-- <form   id="admin" method="POST" action="{{ route('login') }}">

                            @csrf
                            <div class="form-group">
                                <label for="username">Email*</label>
                                <input type="text" id="username" name="email" class="form-control p_input">
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" id="password" name="password" class="form-control p_input">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me
                                    </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-facebook mr-2 col">
                                    <i class="mdi mdi-facebook"></i> Facebook
                                </button>
                                <button class="btn btn-google col">
                                    <i class="mdi mdi-google-plus"></i> Google plus
                                </button>
                            </div>
                            <p class="sign-up">Don't have an Account?<a href="{{route('register')}}"> Sign Up</a></p>
                        </form> --}}
                    </div>


                </div>
            </div>
            <!-- Content-wrapper ends -->
        </div>
        <!-- Row ends -->
    </div>
    <!-- Page-body-wrapper ends -->
</div>
<!-- Container-scroller -->

<!-- Plugins: JS -->
<script src="{{ asset('Admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- Plugin JS for this page -->
<!-- End plugin JS for this page -->

<!-- Injected JS -->
<script src="{{ asset('Admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('Admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('Admin/assets/js/misc.js') }}"></script>
<script src="{{ asset('Admin/assets/js/settings.js') }}"></script>
<script src="{{ asset('Admin/assets/js/todolist.js') }}"></script>
<!-- End injected JS -->

<script>
    // $('#sectionChooser').change(function(){
    //     var myID = $(this).val();
    //     $('.panel').each(function(){
    //         myID === $(this).attr('id') ? $(this).show() : $(this).hide();
    //     });
    // });
</script>
</body>

</html>

