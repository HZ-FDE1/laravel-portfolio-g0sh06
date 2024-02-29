<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('assets/general.css') }}" rel="stylesheet">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<x-nav.nav />

{{-- Content --}}
<section class="section">
    <div class="container">
        <div class="columns">

            <div class="column is-8-desktop is-12-tablet">

                <div id="lists" style="float: right; text-align: left; padding: 20px; color: wheat;">
                    <div id="swotList">
                        <h2>SWOT Analysis</h2>
                        <ul>
                            <h3 id="swot">Strengths</h3>
                            <li>Team player</li>
                            <li>Ability to work under pressure</li>
                            <li>Good Time management</li>
                        </ul>
                        <ul>
                            <h3 id="swot">Weakenesses</h3>
                            <li>Impatient</li>
                            <li>Perfectionist</li>
                            <li>Leave things for the last moment</li>
                        </ul>
                        <ul>
                            <h3 id="swot">Opportunities</h3>
                            <li>Networking</li>
                            <li>Opportunity to test myself</li>
                        </ul>
                        <ul>
                            <h3 id="swot">Threats</h3>
                            <li>Carelessness</li>
                            <li>Failing some exams</li>
                            <li>High requirements</li>
                        </ul>
                    </div>

                    <div id="programming">
                        <h2>Programming experience</h2>
                        <ul>
                            <li>HTML and CSS</li>
                            <li>Java</li>
                            <li>C programming language</li>
                        </ul>
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
