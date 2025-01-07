<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\contactrequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

class contactcontroller extends Controller
{
    //
    public function sendMessage( contactrequest $Request)
    {
        Mail::send(new contactMail( $Request->validated() ) );
        
        return back()->with('success', 'Votre demande de contact a bien été envoyée');
    }
}
