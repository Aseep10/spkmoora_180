<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ready Bootstrap Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="{{ asset('ready/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('ready/assets/css/ready.css') }}">
    <link rel="stylesheet" href="{{ asset('ready/assets/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            @include('layouts.ready.header')

            @include('layouts.ready.sidebar')

            <div class="main-panel">
				<div class="content">
					<div class="container-fluid">
                    @yield('konten')
                </div>
            </div>
        </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    
    <script src="{{ asset('ready/assets/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/chartist/chartist.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/jquery-mapael/maps/world_countries.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/chart-circle/circles.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/ready.min.js')}}"></script>
    <script src="{{ asset('ready/assets/js/demo.js')}}"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>