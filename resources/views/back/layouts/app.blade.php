<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset("css/dashboard.css") }}">
</head>

<body>
    <div id="app">

        @include("back.partials.navbar")

        <div id="main" class="home-section">
            

            @yield("content")

        </div>
    </div>
    <script src="{{ asset("js/dashboard.js") }}"></script>
</body>

</html>
