<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{





    /**
     * Envia um email de teste utilizando filas de processamento
     * @param TestMail New TestMail instance
     * @return type
     * @throws conditon 
     **/
  
    public function sendMail(){

        Mail::to('pedro@test.com')->send(new TestMail());



    }
}
