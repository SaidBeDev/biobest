<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($data['title']) ? $data['title'] : '' }}</title>

    {{-- Styles goes here --}}

    @yield('styles')
</head>
<body>
    @yield('content')

    {{-- Scripts goes here --}}

    @yield('scripts')
</body>
</html>
