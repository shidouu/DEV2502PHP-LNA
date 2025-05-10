<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Trang chủ')</title>
</head>

<body>

    @include('_layouts.header')
    @include('_layouts.navbar')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-9">
                @yield('content')
                @include('_layouts.sidebar')
            </div>
        </div>
    </div>

    @include('_layouts.footer')

</body>

</html>
