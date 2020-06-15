<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Payment;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $invoices = Invoice::all()->count();
        $payments = Payment::all()->count();
        $users = User::all()->count();
        return view('home',compact('invoices','payments','users'));
    }
}
