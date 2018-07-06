<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hemocentro;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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

    public function profile()
    {
        return view('hemocentro.user_profile', ['user'=> Auth::user()]);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => empty($request->password) ? '' : 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        
        if($user->id != $request->id){
            return back()->with('alert_layout', 'alert-danger')->with('alert_message', 'Sem permissão para alterar o usuário.');
        }

        $user->name = $request->name;
        if(!empty($request->password)){
            $user->password = $request->password;
        }
        $user->save();

        return redirect()->route('hemocentro.dashboard')->with('alert_layout', 'alert-danger')->with('alert_message', 'Sem permissão para alterar os dados deste usuário.');
    }

    
}
