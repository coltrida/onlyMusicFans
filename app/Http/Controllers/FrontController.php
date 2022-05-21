<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function subscribe()
    {
        return view('subscribe', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function subscribePost(Request $request)
    {
        auth()->user()->newSubscription('cashier', $request->plan)->create($request->paymentMethod);
        return redirect('/');
    }
}
