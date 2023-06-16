<!DOCTYPE html>
<html>
<head>
    <title>Task Management</title>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/sortable.js') }}" defer></script>
    <script type="module" src="{{ asset('js/bootstrap.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css" >
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>