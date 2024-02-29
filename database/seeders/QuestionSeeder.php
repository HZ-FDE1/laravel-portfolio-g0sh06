<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Faq::create([
                'id' => 1,
                'question' => 'How can you print a document from your laptop at HZ?',
                'answer' => 'Duplex printing (default)
                • Select the following printer for your job: HZ Printer
                • When the print job is given, log in using the HZ pass or by entering your HZ username & password.
                Then choose the Print Release option.
                You will then see which print jobs are ready.
                If there is sufficient balance in your print account,
                the print jobs will be printed. Tap Access Device to see your balance.
                After printing, tap the following icon on the printer to log out:
                Single-sided printing
                • For your job, select the following printer: HZ Printer
                • Click Printer Properties next to the print job.
                • Select tab Basic Settings tab at option 1-sided/2-sided/Booklet Printing for 1-sided Printing.
                Colour printing
                • For your job, select the following printer: HZ Printer
                • Click Printer Properties next to the print job.
                • In the Basic Settings tab, select the option Color Mode for Color.
                Automatic stapling
                • For your job, select the following printer: HZ Printer
                • Click Printer Properties next to the print job.
                • In the Basic Settings tab, select the option Finishing for Stapling + Collation.',
                'link' => ''
        ]);

        Faq::create([
            'id' => 2,
            'question' => 'How can you scan a document and send it to your laptop at HZ?',
            'answer' => 'Scanning to a private/external mailbox is not possible. Please do not change the scanner setting.
                • Log on to the printer using your HZ card or by entering your HZ user name & password.
                • Choose the Scan option in the menu.
                • Place the original(s) on the feeder or glass plate.

                Double-sided scanning (optional)
                • Press Change settings
                • For duplex mode, select the 2-sided option

                • Press Start
                • After scanning, press the following symbol on the printer to log off:',
            'link' => ''
        ]);

        Faq::create([
            'id' => 3,
            'question' => 'How can I buy something (like when I sign up for the IT introduction
                event) on the HZ web shop?',
            'answer' => '',
            'link' => 'https://webshop.hz.nl/webshopapp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097'
        ]);

        Faq::create([
            'id' => 4,
            'question' => 'How can you book a project space in one of the wings?',
            'answer' => '',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=7e54d40b762c4dc79205e200f0d4d818'
        ]);

        Faq::create([
            'id' => 5,
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => '',
            'link' => 'https://hz.nl/en/about-hz/contact/middelburg'
        ]);
    }
}
