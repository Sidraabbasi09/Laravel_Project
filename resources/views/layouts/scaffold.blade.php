<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Partial.style')
    {{-- Categoryform Css --}}
    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    @include('Partial.sidebar')
    @include('Partial.navbar')  

<main>
    @yield('content')
</main>



    @include('Partial.footer')
    @include('Partial.scripts')
</body>
</html>