<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        return view('admin.users.list', [
            'users' => User::latest()->get()
        ]);
    }

    public function events()
    {
        return view('admin.events.list');
    }

    public function createEvent()
    {
        return view('admin.events.create');
    }
}
