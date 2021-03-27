<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

         <!-- import css for dashboard -->
         <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}">

        @livewireStyles
      
        <!-- Style for dashboard -->
        <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">




        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
     


    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <!-- Scripts for dashboard -->
        <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/dashboard.js')}}"></script>
        <script src="{{asset('assets/js/widgets.js')}}"></script>

        <!-- Scripts for data tables -->
        <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('assets/js/init-scripts/data-table/datatables-init.js')}}"></script>
            
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
    </body>
</html>
