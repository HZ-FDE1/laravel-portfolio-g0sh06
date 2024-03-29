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
                <div id="ITarticle" style="position: relative; float: left; display: inline-block; font-size: 20px; color: wheat; width: 65%; margin-left: 160px;">
                    <p> <h2>Profession</h2><br><br>
                    The companies, which i chose are Oracle Corporation, IBM and Rockstar Games. Let's start with the first one.
                    Oracle Corporation is a multinational company with headquarter in Texas. They offer a big variaty of
                    products,
                    which they produce. The are selling database software, cloud engineering systems, enterprice software,
                    customer relationship software and more. A person can work as a Software Engineer, AI engineer, Cloud
                    Architect, but you more
                    bussines oriented are also jobs like Project Manager, Bussines System Analysist and etc. Some of the
                    technologies they use(specifically
                    for IT jobs) are SAP, SQL, Java, PHP etc. , Oracle ADF. Oracles's working culture is shaped by diversity,
                    equity, inclusion, communication,
                    customer influence and etc. For me it will be pleasure to be part of the Oracle's, because this one of the
                    biggest software companies and
                    from articles I can find out that the working environment is friendly. <br>
                    The second company is IBM. I think everybody has ever head about IBM. They operate in 175 countries and
                    their are of work is in big variaty of IT field:
                    hardware(laptops), software, hosting and consulting services, nanotechnology and quantum computing. They are
                    always developing different fields of work,
                    which means that they are always hiring. Their job offers vary widely: from Bussines Analyst, Associate
                    Consultant, Reporting Analyst to Data Scientist,
                    AI engineer, Front End Dev. , Software Engineer. Some of the technologies IBM's employees use are DevOps,
                    Quantum Computing. Databases, AI and machine learning.
                    According to a survey a lot of people like to work in IBM, because of the people and working enviroment.
                    Also because of the opportunities, good career,
                    diversity, flexibilty. Personally I would really want to work for IBM, becase as we can see their work is in
                    IT fields, which are still relatively new and still
                    developing.<br>
                    And the last company is Rockastar Games. I personally think that this company is one of the most legendary
                    copmany in the field of game development. Their work
                    is tightly connected with developing and publishing game. Unfortunately Rockstar Games does not have another
                    activity in another IT area. Some their most famous
                    products are GTA game serie, Red Dead Redemption game serie and Midnight Club.The technology Rockstar Games
                    employees use are Unity(software for game dev.),
                    C++(the fastest language ever created), Microsoft Azure and etc.
                    </p>

                    <div class="resources" style="font-size: 12px;">
                        <h3>Resources</h3>
                        <a href="https://www.oracle.com/webfolder/college-recruiting/projects/oracle-application-de.html">Oracle</a>
                        <a href="https://www.oracle.com/human-capital-management/employee-experience/what-is-company-culture/">Oracle
                        </a>
                        <a href="https://www.ibm.com/us-en">IBM</a>
                        <a href="https://www.greatplacetowork.com/certified-company/1121389">IBM</a>
                        <a href="https://6sense.com/company/rockstar-games/5b8916697c866675e510d3eb">Rockstar Games</a>
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
