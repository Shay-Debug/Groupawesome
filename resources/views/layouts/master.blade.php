<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dolphin Cove</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        | Booking
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/walkin')}}">Walk-In-Guest</a></li>
                        <li><a class="dropdown-item" href="/tourguest">Tour-Company-Guest</a></li>
                   </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')

{{--<!-- Footer -->--}}
{{--<footer class="text-center text-lg-start bg-light text-muted ">--}}
{{--    <!-- Section: Social media -->--}}
{{--    <section--}}
{{--        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"--}}
{{--    >--}}
{{--        <!-- Left -->--}}
{{--        <div class="me-5 d-none d-lg-block">--}}
{{--            <span>Get connected with us on social networks:</span>--}}
{{--        </div>--}}
{{--        <!-- Left -->--}}

{{--        <!-- Right -->--}}
{{--        <div>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-facebook-f"></i>--}}
{{--            </a>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-google"></i>--}}
{{--            </a>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-instagram"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- Right -->--}}
{{--    </section>--}}
{{--    <!-- Section: Social media -->--}}

{{--    <!-- Section: Links  -->--}}
{{--    <section class="">--}}
{{--        <div class="container text-center text-md-start mt-5">--}}
{{--            <!-- Grid row -->--}}
{{--            <div class="row mt-3">--}}
{{--                <!-- Grid column -->--}}
{{--                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">--}}
{{--                    <!-- Content -->--}}
{{--                    <h6 class="text-uppercase fw-bold mb-4">--}}
{{--                        <i class="fas fa-gem me-3"></i>M&S Electronics--}}
{{--                    </h6>--}}
{{--                    <p>--}}
{{--                        M&S Electronics sales and repairs a wide variety of appliances and other electronics.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <!-- Grid column -->--}}

{{--                <!-- Grid column -->--}}
{{--                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">--}}
{{--                    <!-- Links -->--}}
{{--                    <h6 class="text-uppercase fw-bold mb-4">--}}
{{--                        Useful links--}}
{{--                    </h6>--}}
{{--                    <p>--}}
{{--                        <a href="#" class="text-reset">Home</a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#" class="text-reset">About us</a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <!-- Grid column -->--}}

{{--                <!-- Grid column -->--}}
{{--                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">--}}
{{--                    <!-- Links -->--}}
{{--                    <h6 class="text-uppercase fw-bold mb-4">--}}
{{--                        Contact--}}
{{--                    </h6>--}}
{{--                    <p><i class="fas fa-home me-3"></i>Kingston, Jamaica</p>--}}
{{--                    <p>--}}
{{--                        <i class="fas fa-envelope me-3"></i>--}}
{{--                        mselectronics@gmail.com--}}
{{--                    </p>--}}
{{--                    <p><i class="fas fa-phone me-3"></i> 876 546 0610</p>--}}
{{--                    --}}{{--                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>--}}
{{--                </div>--}}
{{--                <!-- Grid column -->--}}
{{--            </div>--}}
{{--            <!-- Grid row -->--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Section: Links  -->--}}

{{--    <!-- Copyright -->--}}
{{--    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">--}}
{{--        © 2021 Copyright:--}}
{{--        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">mselectronis.com</a>--}}
{{--    </div>--}}
{{--    <!-- Copyright -->--}}
{{--</footer>--}}
{{--<!-- Footer -->--}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
