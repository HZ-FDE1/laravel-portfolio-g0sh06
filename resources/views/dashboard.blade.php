
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('assets/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general.css') }}" rel="stylesheet">

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
            <div class="column is-8-desktop is-12-tablet">
                <table style="height: 90%; margin-top: 50px;">
                    <tr id="rows">
                        <th style="background-color: rgba(14, 0, 90, 0.699);">Quartile</th>
                        <th style="background-color: rgba(14, 0, 90, 0.699);">Course</th>
                        <th style="background-color: rgba(14, 0, 90, 0.699);">EC</th>
                        <th style="background-color: rgba(14, 0, 90, 0.699);">Assesment</th>
                        <th style="background-color: rgba(14, 0, 90, 0.699);">Grade</th>
                    </tr>

                    <!--FIRST QUARTILE-->
                    <tr id="rows">
                        <td rowspan="3">First Quartile</td>
                        <td>Program- & Career Orientation (PCO):</td>
                        <td>2.5 EC</td>
                        <td>Assessment website</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Computer Science Basics</td>
                        <td>5 EC</td>
                        <td>Written exam</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Programming Basics</td>
                        <td>5 EC</td>
                        <td>Case study exam</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>

                    <!--SECOND QUARTILE-->
                    <tr id="rows">
                        <td rowspan="2">Second Quartile</td>
                        <td rowspan="2">Object-Oriented Programming</td>
                        <td rowspan="2">10 EC</td>
                        <td>Group assignment</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Case study exam</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>

                    <!--THIRD QUARTILE-->
                    <tr id="rows">
                        <td rowspan="6">Third Quartile</td>
                    </tr>
                    <tr id="rows">
                        <td rowspan="4">Framework project 1</td>
                        <td rowspan="4">10 EC</td>
                        <td>On-site case study exam</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Database exam</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr>
                        <td>Group presentation on project result</td>
                        <td><input type="number" id="gradetest" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Group portfolio with individual elements on requirements</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Business IT Consultancy basics</td>
                        <td>2.5 EC</td>
                        <td>Video</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>

                    <!--FOURTH QUARTILE-->
                    <tr id="rows">
                        <td rowspan="4">Fourth Quartile</td>
                        <td rowspan="3">Framework project 2</td>
                        <td rowspan="3">10 EC</td>
                        <td>Final delivery</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Report of acceptance tests and optional assessments</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>IT Development portfolio</td>
                        <td><input type="number" id="gradetest" name="grade" max="10" min="1"></td>
                    </tr>
                    <tr id="rows">
                        <td>Personal Professional Development Exploration</td>
                        <td>12.5 EC</td>
                        <td>Criterium focused interview</td>
                        <td><input type="number" id="grade" name="grade" max="10" min="1"></td>
                    </tr>

                    <tr id="rows">
                        <td rowspan="4">Additional courses</td>
                        <td>IT Personality- projectweek 1</td>
                        <td>1.25 EC</td>
                        <td>Portfolio</td>
                        <td><input type="radio" id="grade"></td>

                    </tr>
                    <tr id="rows">
                        <td>IT Personality International week</td>
                        <td>1.25 EC</td>
                        <td>Portfolio</td>
                        <td><input type="radio" id="grade"></td>
                    </tr>
                    <tr id="rows">
                        <td>IT Personality 1</td>
                        <td>1.25 EC</td>
                        <td>Portfolio</td>
                        <td><input type="radio" id="grade"></td>

                    </tr>
                    <tr id="rows">
                        <td>IT Personality 2</td>
                        <td>1.25 EC</td>
                        <td>Portfolio</td>
                        <td><input type="radio" id="grade"></td>

                    </tr>
                </table>
                <div class="progress">
                    <label for="file">Carrer Study points</label>
                    <progress id="file" value="32" max="60"> 32% </progress>
                </div>
                <h3 style="font-size: 30px; margin-right: 375px; color: wheat;">Total amount of credits: 60 EC</h3>

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
