<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIobest</title>

    {{-- Styles goes here --}}
    <link rel="stylesheet" href="style.css">

</head>
<body>
    @include('frontend.layouts.header')

    @yield('content')

</body>
</html>
