<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Events\CreateProductEvent;
use App\Events\TestEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return redirect()->route('dashboard');
    }

    public function dashboard(Request $request)
    {
        // CreateProductEvent::dispatch("ok");
        event(new TestEvent());
        return view('dashboard');
    }
}
