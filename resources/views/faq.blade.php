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
<section>
    <div>
        <div>
            <div>
                <div class="faq" style="margin-left: 150px; color: wheat; text-align: left">
                    <h1 style="font-size: 56px;">Frequently asked questions:</h1>
                    <details>
                        <summary style="font-size: 30px;">How can you print a document from your laptop at HZ?</summary>
                        <p>Duplex printing (default)<br>
                            • Select the following printer for your job: HZ Printer<br>
                            • When the print job is given, log in using the HZ pass or by entering your HZ username & password.<br>
                            Then choose the Print Release option.<br>
                            You will then see which print jobs are ready.<br>
                            If there is sufficient balance in your print account,<br>
                            the print jobs will be printed. Tap Access Device to see your balance.<br>
                            After printing, tap the following icon on the printer to log out:<br><br>
                            Single-sided printing<br>
                            • For your job, select the following printer: HZ Printer<br>
                            • Click Printer Properties next to the print job.<br>
                            • Select tab Basic Settings tab at option 1-sided/2-sided/Booklet Printing for 1-sided Printing.<br><br>
                            Colour printing<br>
                            • For your job, select the following printer: HZ Printer<br>
                            • Click Printer Properties next to the print job.<br>
                            • In the Basic Settings tab, select the option Color Mode for Color.<br><br>
                            Automatic stapling<br>
                            • For your job, select the following printer: HZ Printer<br>
                            • Click Printer Properties next to the print job.<br>
                            • In the Basic Settings tab, select the option Finishing for Stapling + Collation.<br>
                        </p>
                    </details>
                    <details>
                        <summary style="font-size: 30px;">How can you scan a document and send it to your laptop at HZ?</summary>
                        <p>Scanning to a private/external mailbox is not possible. Please do not change the scanner setting.<br><br>
                            • Log on to the printer using your HZ card or by entering your HZ user name & password.<br>
                            • Choose the Scan option in the menu.<br>
                            • Place the original(s) on the feeder or glass plate.<br><br>

                            Double-sided scanning (optional)<br><br>
                            • Press Change settings<br>
                            • For duplex mode, select the 2-sided option<br>

                            • Press Start<br>
                            • After scanning, press the following symbol on the printer to log off:<br>

                        </p>
                    </details>
                    <details>
                        <summary style="font-size: 30px;">How can I buy something (like when I sign up for the IT introduction
                            event) on the HZ web shop?</summary>
                        <p><a href="https://webshop.hz.nl/webshopapp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097">Go to the sourse</a></p>
                    </details>
                    <details>
                        <summary style=" font-size: 30px;">How can you book a project space in one of the wings?</summary>
                        <p><a
                                href="
                    https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=7e54d40b762c4dc79205e200f0d4d818">
                                Go to source</a></p>
                    </details>
                    <details>
                        <summary style="font-size: 30px;">What are the instructions if you want to park your car at the HZ parking
                            lot?</summary>
                        <p><a href="https://hz.nl/en/about-hz/contact/middelburg">Go to source(Look at the bottom of the page)</a>
                        </p>
                    </details>
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
