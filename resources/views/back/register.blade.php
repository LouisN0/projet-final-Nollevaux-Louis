{{-- il faut changer la route dans la partie create du RegisteredUserController  (auth.register en back.register) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/back-app.css') }}">
    
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/x-icon">

    {{-- css pour le login --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body style="background-color:#a12c2f">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-md-2 mt-md-4 pb-5">
                                    <div class="col-sm-12">
                                        <h2 class="fw-bold mb-2 text-uppercase text-dark">Register</h2>
                                        <div class="form-outline form-white mb-4 form-floating">
                                            <input type="nom" id="nom" class="form-control form-control-lg "
                                                placeholder="nom *" name="nom" value="{{ old('nom') }}"
                                                autocomplete="nom">
                                            <label for="form-label text-dark">Name</label>

                                        </div>


                                        <div class="form-outline form-white mb-4 form-floating">
                                            <input type="email" id="email" class="form-control form-control-lg "
                                                placeholder="email Address *" name="email" value="{{ old('email') }}"
                                                autocomplete="email">
                                            <label for="form-label text-dark">Email</label>

                                        </div>


                                        <div class="form-outline form-white mb-4 form-floating">
                                            <input type="password" id="password" class="form-control form-control-lg "
                                                placeholder="password *" name="password"
                                                value="{{ old('password') }}" autocomplete="password">
                                            <label for="form-label text-dark">Password</label>

                                        </div>



                                        <div class="form-outline form-white mb-4 form-floating">
                                            <input type="password" id="password_confirmation"
                                                class="form-control form-control-lg "
                                                placeholder="password_confirmation *" name="password_confirmation"
                                                value="{{ old('password_confirmation') }}"
                                                autocomplete="password_confirmation">
                                            <label for="form-label text-dark">Confirm password</label>

                                        </div>


                                        <div class="flex justify-between items-center mt-6">
                                            <button type="submit"
                                                class="btn button-gradient btn-lg px-5 mt-5"><span
                                                    class="me-1"><i class="fas fa-user-plus"></i></span>
                                                Register</button>
                                            <a href="/" class="btn btn-light btn-lg px-5 mt-5">Cancel</a>
                                        </div>
                                        <p>*by registering you automatically accept to have mail send by us to you/p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
