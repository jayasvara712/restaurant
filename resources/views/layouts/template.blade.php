<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Alang Medan</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="stisla/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stisla/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="icon" href="/asset/etc/logo.png" type="image/png">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="stisla/assets/css/style.css">
    <link rel="stylesheet" href="stisla/assets/css/components.css">
    <link rel="stylesheet" href="stisla/assets/css/custom.css">
</head>

<body class="layout-3">

    <div id="app">
        <div class="main-wrapper container">
            @include('layouts.navbar')


            <div class="main-content">
                @yield('main')
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2023 <div class="bullet"></div> <a href="https://github.com/jayasvara712">Jaya
                        Svara</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="stisla/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="stisla/node_modules/popper.js/dist/popper.js"></script>
    <script src="stisla/node_modules/tooltip.js/dist/tooltip.min.js"></script>
    <script src="stisla/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="stisla/node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="stisla/node_modules/moment/dist/moment.min.js"></script>
    <script src="stisla/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    {{-- <script src="stisla/assets/js/page/bootstrap-modal.js"></script> --}}

    <!-- Template JS File -->
    <script src="stisla/assets/js/scripts.js"></script>
    <script src="stisla/assets/js/custom.js"></script>
</body>

</html>
