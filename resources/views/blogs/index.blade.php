<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/index.css') }}" rel="stylesheet">
    <title>HZ HBO-ICT</title>
    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<x-nav.nav />

{{-- Content --}}
<section>
    <div>
        <div>
            <button><a href=" {{ route('blog.create') }}">Create new Blog</a></button>
                @foreach ($blogs as $blog)
                        <p style="margin-left: 200px">{{ $blog->title }}</p>
                        <p style="margin-left: 200px">{{ $blog->description }}</p>
                        <button><a href="{{ route('blog.edit', $blog->id) }}">Edit</a></button>
                        <button><a href="{{ route('blog.delete', $blog->id) }}">Delete</a></button>
                <hr style="margin-left: 150px">
                @endforeach

        </div>
    </div>
</section>

{{-- Footer --}}
<x-nav.footer />

{{-- Aside --}}
<x-nav.aside />

</body>
</html>
