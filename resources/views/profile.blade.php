
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('assets/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/profile.css') }}" rel="stylesheet">
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
        <div class="columns">

            <div class="column is-8-desktop is-12-tablet">

                <<table>
                    <tr>
                        <th>Information about me</th>
                    </tr>
                    <tr>
                        <td>My name</td>
                        <td>Simeon Atanasov</td>
                    </tr>
                    <tr>
                        <td>Hometown,Homecountry</td>
                        <td>Varna,Bulgaria</td>
                    </tr>
                    <tr>
                        <td>What I am studying?</td>
                        <td>ICT-Student a HZ UoAS</td>
                    </tr>
                    <tr>
                        <td>Hobbies</td>
                        <td>Training, Reading books, watching movies</td>
                    </tr>
                    <tr>
                        <td>Favourite books</td>
                        <td>1984 by George Orwell, <br>
                            451 Fahrenheit by Ray Bradbury</td>
                    </tr>
                    <tr>
                        <td>Favourite Movie</td>
                        <td>Star Wars</td>
                    </tr>
                </table>
                <img src="images/Bulgaria.jpg" alt="bg" id="pictures">
                <img src="images/starwarsmeme.jpg" alt="starwars" id="pictures">
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
