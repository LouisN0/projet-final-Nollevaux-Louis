<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">

    <link rel="stylesheet" href="{{ asset("css/bold.css") }}">

    <link rel="stylesheet" href="{{ asset("css/perfect-scrollbar.css") }}">
</head>

<body>
    <div id="app">

        @include("back.partials.navbar")

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield("content")

        </div>
    </div>
    <script src="{{ asset("js/perfect-scrollbar.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>
