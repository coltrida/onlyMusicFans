<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('home');
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
