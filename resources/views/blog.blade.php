<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('assets/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/blog.css') }}" rel="stylesheet">

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
            <div>
                <div class="txt1" style="margin-left: 150px;">
                    <h1 style="font-size: 42px">Articles:</h1>
                    <h3 style="font-size: 32px">Study choice</h3>
                    <p style="font-size: 22px;">Study choice <br><br>
                        The IT field is always spreading with high speed.<br>
                        There is a big list of jobs, which are wating to be fulfil with quality workers.<br>
                        After the big offering of working place as a reason to study ICT, then comes the work development(in meaning
                        salary
                        and better promoting chances). After all I believe that most of the people are working a job
                        not only for personal fulfilment, but also for the monthly wage. Of course if you work something only
                        because of the money.
                        then you never going to enjoy your work. So that's why a person should find the perfect balance between
                        money and the things,
                        that makes him happy. Also programming is one of my passions.When I am studying it, I think that i can
                        reveal my full potential,
                        becase I can be fully concentrated into my study. I can spend time devemoping my programming skills knowing
                        that every spent hour
                        will pay off at some point.<br>
                        After my graduation I will be focused on finding a job related to my university education. But for now this
                        is
                        several years in the future and can not predict how everything is going to go.
                        <a href="/blog/posOne" style="font-size: 25px; text-align: right;">Read more...</a>
                    </p>
                </div>

                <div class="swot">
                    <h2>SWOT analysis</h2>
                    <a href="/blog/posTwo">Read more...</a>
                </div>

                <div class="programming">
                    <h2>Programming Experience</h2>
                    <a href="/blog/posTwo">Read more...</a>
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
