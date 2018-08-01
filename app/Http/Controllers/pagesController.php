<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteers;
use App\Events;
use App\Event_details;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{

    /**
     * pagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    public function home()
    {
        return view('pages.home');
    }



    public function aboutIEEE()
    {

        return view('pages.aboutIEEE');
    }

    public function stc1()
    {
        return view('pages.stc1');
    }


    public function contactUs()
    {
        return view('pages.contactUs');
    }

    public function aboutBoard()
    {
        return view('pages.aboutBoard');
    }


    /**
     * @param Request $request
     *
     * send mails function
     *
     * email not setted yet
     */
    public function sendmail(Request $request)
    {




        if (isset($request)) {
            if (isset($request['emails'])){
                if ($request['emails'] == "sendmail") {


                    $headers = 'From: ' . $request['email'] . "\r\n" .
                        'Reply-To: ' . $request['email'] . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                    $text=str_replace(array(";","'","--")," . ",$request['text'] );

                    $email_to=" "; // set mail

                    @mail($email_to, $request['subject'], $request['text'], $headers);
                    echo"<script>alert('email was sent')</script>";
                    echo  ' <script>window.location = "../contact us/";</script>';
                    header("location:../contact us/");
                }
            }
        }
    }

}
