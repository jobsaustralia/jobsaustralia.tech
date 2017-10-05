<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Apply extends Mailable{
    use Queueable, SerializesModels;

    protected $link;
    protected $title;

    public function __construct($link, $title){
        $this->link = $link;
        $this->title = $title;
    }

    public function build(){
        return $this->view('emails.apply')->with(['link' => $this->link, 'title' => $this->title]);
    }
}
