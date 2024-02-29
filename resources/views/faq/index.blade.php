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
            <button><a href=" {{ route('faq.create') }}">Create new FAQ</a></button>
                @foreach ($faqs as $faq)
                    <details>
                        <summary style="font-size: 36px; text-align: left; margin-left: 150px">{{ $faq->question }}</summary>
                        <p>{{ $faq->answer }}</p>
                        <p>{{ $faq->link }}</p>
                        <button><a href="{{ route('faq.edit', $faq->id) }}">Edit</a></button>
                        <button><a href="{{ route('faq.delete', $faq->id) }}">Delete</a></button>
                    </details>
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
