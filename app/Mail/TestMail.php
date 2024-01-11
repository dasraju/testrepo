<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Spatie\Browsershot\Browsershot;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public $pdf;
    public $lava;
    public function __construct($lv)
    {
        $this->lava = $lv;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $html = view('mail.testmail')->render();
        // $pdf = Browsershot::html($html)->pdf();


        // $pdf = PDF::loadView('mail.testmail');
        // dd($pdf);
        return $this->view('mail.testmail');
    }
}
