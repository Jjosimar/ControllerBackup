<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hemocentro;
use App\Models\Campanha;
use App\Models\CampanhaTipoSangue;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
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
        $campanhas = Campanha::where('hemocentro', $hemocentro->id)->get();

        return view('hemocentro.campaigns', ['campanhas'=>$campanhas]);
    }

    public function new()
    {
        $tpsangue = array(
            array("id" => "A+", "selected" => false),
            array("id" => "A-", "selected" => false),
            array("id" => "B+", "selected" => false),
            array("id" => "B-", "selected" => false),
            array("id" => "AB+", "selected" => false),
            array("id" => "AB-", "selected" => false),
            array("id" => "O+", "selected" => false),
            array("id" => "O-", "selected" => false),
        );
        
        return view('hemocentro.campaigns_form', ['action' => 'new', 'tipo_sangue' => $tpsangue]);
    }

    public function edit($id)
    {
        $hemocentro = Hemocentro::where('user', Auth::id())->first();
        $campanha = Campanha::FindOrFail($id);
        $tipos_sangue = CampanhaTipoSangue::where('campanha', $campanha->id)->get();

        $tpsangue = array(
            array("id" => "A+", "selected" => false),
            array("id" => "A-", "selected" => false),
            array("id" => "B+", "selected" => false),
            array("id" => "B-", "selected" => false),
            array("id" => "AB+", "selected" => false),
            array("id" => "AB-", "selected" => false),
            array("id" => "O+", "selected" => false),
            array("id" => "O-", "selected" => false),
        );

        foreach($tipos_sangue as $tpsg){

            for($a = 0; $a < count($tpsangue); $a++){
                if($tpsg->tipoSang == $tpsangue[$a]['id']){
                    $tpsangue[$a]['selected'] = true;
                    break;
                }
            }
        }

        return view('hemocentro.campaigns_form', ['action' => 'edit', 'campanha' => $campanha, 'tipo_sangue' => $tpsangue]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'texto' => 'required|string',
            'tipoSang' => 'required|array',
        ]);

        $hemocentro = Hemocentro::where('user', Auth::id())->first();

        $campanha = new Campanha();
        $campanha->titulo = $request->titulo;
        $campanha->texto = $request->texto;
        $campanha->hemocentro = $hemocentro->id;
        $campanha ->save();
        
        foreach($request->tipoSang as $tipoSangue){
            $campanhaTipoSangue = new CampanhaTipoSangue();
            $campanhaTipoSangue->tipoSang = $tipoSangue;
            $campanhaTipoSangue->campanha = $campanha->id;
            $campanhaTipoSangue->save();           
        }

        return redirect()->route('hemocentro.campaigns')->with('alert_layout', 'alert-success')->with('alert_message', 'Campanha Publicada.');
    }


    public function update(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'texto' => 'required|string',
            'tipoSang' => 'required|array',
        ]);

        $hemocentro = Hemocentro::where('user', Auth::id())->first();

        $campanha = new Campanha();
        $campanha->titulo = $request->titulo;
        $campanha->texto = $request->texto;
        $campanha->hemocentro = $hemocentro->id;
        $campanha ->save();
        
        foreach($request->tipoSang as $tipoSangue){
            $campanhaTipoSangue = new CampanhaTipoSangue();
            $campanhaTipoSangue->tipoSang = $tipoSangue;
            $campanhaTipoSangue->campanha = $campanha->id;
            $campanhaTipoSangue->save();           
        }

        
        return redirect()->route('hemocentro.dashboard')->with('alert_layout', 'alert-success')->with('alert_message', 'Dados alterados com Sucesso!');
    }

    
}
