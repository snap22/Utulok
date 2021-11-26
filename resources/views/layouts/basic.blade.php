<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My scripts -->
    <script src="/js/main.js"></script>

    <!-- Bootstrap styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- My styles -->
    
    <link rel="stylesheet" href="/css/main.css">

    <title>Wouff - @yield('title')</title>
</head>
<body>
    <!-- Navigation bar -->

    <x-public.navbar>
        
    </x-public.navbar>

    @if (session()->has('success'))
        <x-public.flash-message class="flash-message" type="success" :message="session('success')" />
    @endif

    @if (session()->has('error'))
        <x-public.flash-message class="flash-message" type="danger" :message="session('error')" />
    @endif

    <!-- Body -->

    @yield('body')

    <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>