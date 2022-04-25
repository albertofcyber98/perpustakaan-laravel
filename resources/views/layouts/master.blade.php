<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/jquery.js')}}"></script>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy/mm/dd',
            autoclose: 'true'
        });
    </script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>