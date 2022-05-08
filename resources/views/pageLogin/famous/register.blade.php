<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AKO</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/pogi.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('auth/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('auth/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand"  href="{{ url('/') }}">
                <img src="{{ asset('assets/img/pogi.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="dashboard.html">
                                <img src="{{ asset('assets/img/pogi.png') }}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="nav-link-inner--text">تسجيل دخول</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="nav-link-inner--text">إنشاء حساب</span>
                        </a>
                    </li>
                </ul> --}}

            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        @include('sweet::alert')

        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center" style="    margin-top: 240px;">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary border-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h2>Create a famous account</h2>
                            </div>
                            <form method="POST" action="{{route('famousregister')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('first_name') is-invalid @enderror"
                                            value="{{ old('first_name') }}" name="first_name"
                                            placeholder="Enter the first name" type="text">

                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Last Name</label>

                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('last_name') is-invalid @enderror"
                                            value="{{ old('last_name') }}" name="last_name"
                                            placeholder="Enter the last name" type="text">

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Email</label>

                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" name="email" placeholder="Enter the Email"
                                            type="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}" name="phone" placeholder="Enter the Phone Number"
                                            type="text">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Bank IBAN</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                
                                                <i class="ni ni-bold"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('bank_IBAN') is-invalid @enderror"
                                            value="{{ old('bank_IBAN') }}" name="bank_IBAN"
                                            placeholder="Enter IBAN Bank (Optionel)" type="text">

                                        @error('bank_IBAN')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Bank Name</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-university" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        <select name="bank_name" id="" class="form-control">
                                            @foreach ($banks as $bank)
                                            <option value="{{$bank->name}}">{{$bank->name}}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""> Password</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" name="password"
                                            placeholder="Enter the Password" type="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <span ><strong> Social Media Accounts</strong>
                                </span>

                                <div class="form-group">
                                    <label for="">Youtube</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa-brands fa-youtube"></i>


                                            </span>
                                        </div>
                                        <input class="form-control @error('youtube') is-invalid @enderror"
                                            value="{{ old('youtube') }}" name="youtube"
                                            placeholder="Enter your youtube account" type="youtube">

                                        @error('youtube')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Snapchat</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa-brands fa-snapchat"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('snapchat') is-invalid @enderror"
                                            value="{{ old('snapchat') }}" name="snapchat"
                                            placeholder="Enter your snapchat account" type="snapchat">

                                        @error('snapchat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Instagram</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa-brands fa-instagram"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('instagram') is-invalid @enderror"
                                            value="{{ old('instagram') }}" name="instagram"
                                            placeholder="Enter your Instagram account" type="instagram">

                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Twitter</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa-brands fa-twitter"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('twitter') is-invalid @enderror"
                                            value="{{ old('twitter') }}" name="twitter"
                                            placeholder="Enter your Twitter account" type="twitter">

                                        @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary ">Create a famous account</button>

                                </div>
                                <br>

                                {{-- <div class="form-group">

                                    <div class="input-group-prepend">
                                        <label>
                                            هل لديك حساب بالفعل ؟ <a href=""> تسجيل دخول</a>
                                        </label>
                                    </div>

                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('auth/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('auth/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('auth/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('auth/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('auth/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('auth/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
