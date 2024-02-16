
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
            <div>
                <div>
                    <div>
                        <h1 style="text-align: center; font-size: 56px">Why I think HBO-ICT programme suits me the best</h1>
                        <div class="pictures-home">
                            <div class="picture1">
                                <p>1. I personaly believe that ICT programm suits me, <br> because it can teach you
                                    easiest way to find a solution
                                    to a problem.<br>
                                    I think that this skill can be very useful in life, <br>
                                    because it can save you from in very extreme situations, <br>
                                    where your future can depends on you</p>
                                <img src="/images/problem.webp" id="page1pictures">

                            </div>

                            <div class="picture2">
                                <p>2. And here we come to the next thing about programming. THE PASSION. <br>
                                    Programming is not only about money, personal development and etc.,<br>
                                    but a person has to be passionate about that. <br>
                                    If some has started programming just for the money,<br>
                                    he is not going to go very far away</p>
                                <img src="/images/passion.png" id="page1pictures">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <x-nav.footer />

        {{-- Aside --}}
        <x-nav.aside />

    </body>
</html>
