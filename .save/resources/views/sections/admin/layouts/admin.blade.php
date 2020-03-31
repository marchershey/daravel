@include('sections.admin.layouts.header')

<body class="admin" style="display:none;">
    <nav id="topnav" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark flex-lg-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-xl-2 mr-0 text-center" href="/admin">{{config('app.name')}} Admin</a>
        <div class="w-100 d-flex justify-content-between">
            <ul class="navbar-nav px-4 px-md-2">
                <li class="nav-item text-nowrap d-md-none">
                    <a class="nav-link" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav px-4 px-md-2">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            @include('sections.admin.layouts.sidebar')

            <main role="main" class="col-md-9 ml-sm-auto col-xl-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pt-md-3 pb-2 mb-3 ">
                    <h1 class="h2">@yield('pageTitle', 'pageTitle')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        @yield('pageSubTitle', 'pageSubTitle')
                    </div>
                </div>

                @yield('content', 'content')
            </main>
        </div>
    </div>

</body>

</html>