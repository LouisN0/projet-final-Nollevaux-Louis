{{-- il faut changer la route dans la partie create du AuthenticatedSessionController  (auth.login en back.login) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/all/min.css') }}">
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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <fieldset>
                                    <div class="mb-md-2 mt-md-4 pb-5">
                                        <div class="col-sm-12">

                                            <h2 class="fw-bold mb-2 text-uppercase text-dark">Login</h2>
                                            <p class="text-dark-50 mb-5">Please enter your login and password!</p>
                                            <div class="form-outline form-white mb-4 form-floating">
                                                <input type="email" id="email"
                                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                    placeholder="Email Address *" name="email"
                                                    value="{{ old('email') }}" autocomplete="email">
                                                <label for="email"
                                                    class="form-label text-dark">{{ __('Email') }}</label>

                                                @error('email')
                                                    <span class="invalid-feedback d-block mt-2 text-danger rounded"
                                                        role="alert">
                                                        <span><i class="fas fa-exclamation-triangle"></i></span>
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-outline form-white mb-4 form-floating">
                                                <input type="password" id="password"
                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                    placeholder="Password *" name="password"
                                                    autocomplete="new-password">
                                                <label for="password"
                                                    class="form-label text-dark">{{ __('Password') }}</label>
                                                @error('password')
                                                    <span class="invalid-feedback d-block mt-2 text-danger rounded"
                                                        role="alert">
                                                        <span><i class="fas fa-exclamation-triangle"></i></span>
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="d-flex">
                                                <div class="block mx-auto">
                                                    <label for="remember_me" class="inline-flex items-center">
                                                        <input id="remember_me" type="checkbox"
                                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                            name="remember">
                                                        <span
                                                            class="ml-2 text-sm text-dark">{{ __('Remember me') }}</span>
                                                    </label>
                                                </div>
                                                <p class="small mx-auto pb-lg-2"><a
                                                        href="{{ url('forgot-password') }}"
                                                        class="text-gray-600">{{ __('Forgot your password?') }}</a>
                                                </p>
                                            </div>
                                            <div class="flex justify-between items-center mt-6">
                                                <button type="submit" class="btn button-gradient btn-lg px-5 mt-5"><span
                                                        class="me-1"><i class="fas fa-user-plus"></i></span>
                                                    {{ __('Log in') }}</button>
                                                <a href="/" class="btn btn-light btn-lg px-5 mt-5">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
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
