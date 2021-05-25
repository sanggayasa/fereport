<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Script SBADMIN -->
    <link href="{{asset('sbadminstyle/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadminstyle/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('sbadminstyle/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
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
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadminstyle/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sbadminstyle/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadminstyle/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbadminstyle/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins UNTUK TABLE -->
    <script src="{{asset('sbadminstyle/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts UNTUK TABLE-->
    <script src="{{asset('sbadminstyle/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sbadminstyle/js/demo/chart-pie-demo.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('sbadminstyle/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadminstyle/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadminstyle/js/demo/datatables-demo.js')}}"></script>
</body>

</html>