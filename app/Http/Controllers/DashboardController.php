<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hemocentro;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hemocentro = Hemocentro::where('user', Auth::id())->first();
       
        return view('hemocentro.dashboard', ['hemocentro'=>$hemocentro]);
    }

    
}
