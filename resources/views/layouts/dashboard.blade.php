
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Met-U</title>
        <link href="{{ asset ('asset_dashboard/css/style.css')}}" rel="stylesheet" />
        <link href="{{ asset ('asset_dashboard/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset ('asset_dashboard/js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       @include('layouts.navigasi')

        <div id="layoutSidenav">
           @include('layouts.sidebar')
           
           
            <div id="layoutSidenav_content">
                <main>
                    @yield('container')
                    
                </main>
                @include('layouts.footer')
            </div>
        </div>
        <script src="{{  asset('asset_dashboard/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{  asset('asset_dashboard/js/scripts.js') }}"></script>
        <script src="{{  asset('asset_dashboard/js/Chart.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{  asset('asset_dashboard/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{  asset('asset_dashboard/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="{{  asset('asset_dashboard/js/simple-datatables@latest') }}" crossorigin="anonymous"></script>
        <script src="{{  asset('asset_dashboard/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
