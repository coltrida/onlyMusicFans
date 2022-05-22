<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Concert;
use App\Services\ConcertService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mail;

class FrontController extends Controller
{
    public function index()
    {
        $yesteday = Carbon::now()->subDay();
        $builder = Concert::where('concert_date', '>', $yesteday)->orderBy('concert_date');
        $concerts = $builder->get();
        $nextConcert = $builder->first();
        if ($nextConcert){
            $nextConcert = $nextConcert->date_for_countdown;
        }
        return view('home', compact('nextConcert', 'concerts'));
    }

    public function payment($idConcert)
    {
        return view('cardForm', compact('idConcert'));
    }

    public function paymentPost(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_tqFIGSA54WEaXkE4LXrZGTtX00gRqA2x26');

        $customer = null;
        if (auth()->user()->stripe_id) {
            $customer = \Stripe\Customer::all([
                "email" => auth()->user()->email
            ])->first();
        }

        if (!$customer) {
            $customer = \Stripe\Customer::create(array(
                'name' => auth()->user()->name.' '.auth()->user()->surname,
                'phone' => auth()->user()->phone,
                'email' => auth()->user()->email,
                'source' => $request->input('stripeToken'),
            ));
            auth()->user()->stripe_id = $customer["id"];
            auth()->user()->payed = 1;
            auth()->user()->save();
        }

        $concert = Concert::find($request->idConcert);

        try {
            \Stripe\Charge::create ( array (
                "amount" => $concert->cost * 100,
                "currency" => "usd",
                "customer" =>  $customer["id"],
                "description" => "Payment concert: $concert->title"
            ) );
            \Session::flash ( 'success-message', 'Payment done successfully !' );
            return view ( 'cardForm' , ['idConcert' => $request->idConcert]);
        } catch ( \Stripe\Error\Card $e ) {
            \Session::flash ( 'fail-message', $e->get_message() );
            return view ( 'cardForm', ['idConcert' => $request->idConcert] );
        }
    }

    public function contactMail(Request $request)
    {
        Mail::to('coltrida@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->about,
            $request->message,
        ));
        return redirect()->back();
    }

}
