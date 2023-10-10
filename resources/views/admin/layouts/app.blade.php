<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <title>E-Posyandu | {{ $page }}</title>
</head>

<body>
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        @include('admin.layouts.navbar')

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>{{ $page }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Dashboard
                            </a></li>
                        /
                        <li><a href="#" class="active">{{ $page }}</a></li>
                    </ul>
                </div>
                <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a>
            </div>

            
            @yield('content')
            

        </main>

    </div>

    <script src="{{ asset('admin/index.js') }}"></script>
    
    
</body>

</html>