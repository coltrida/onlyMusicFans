<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\ConcertService;
use App\Services\UserService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function users(UserService $userService)
    {
        return view('admin.users.list', [
            'users' => $userService->userList()
        ]);
    }

    public function events(ConcertService $concertService)
    {
        return view('admin.events.list', [
            'concerts' => $concertService->concertList()
        ]);
    }

    public function createEvent()
    {
        return view('admin.events.create');
    }

    public function storeEvent(Request $request, ConcertService $concertService)
    {
        $concert = $concertService->concertCreate($request);
        if ($concert){
            if ($request->hasFile('concert_thumb')){
                $concertService->storePhoto($request, $concert);
            }
            return redirect()->route('admin.events.list');
        }
        dd($concert);
    }
}
