
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HZ HBO-ICT</title>

    <link href="{{ asset('assets/index.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general.css') }}" rel="stylesheet">

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<x-nav.nav />

{{-- Content --}}
<section>
    {{ $slot }}
</section>

{{-- Footer --}}
<x-nav.footer />

{{-- Aside --}}
<x-nav.aside />

</body>
</html>
