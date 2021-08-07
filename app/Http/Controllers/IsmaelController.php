<?php

namespace App\Http\Controllers;

use App\Ismael;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RdKafkaCaster;

class IsmaelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ismael = DB::table('ismaels')->get();

        return view('administradores.grupos.ismael.index', compact('ismael'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administradores.grupos.ismael.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'posicion' => 'required',
            'imagen' => 'required|image',
            'historia' => 'required',
            'resumen' => 'required',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'correo' => '' 
        ]);

        $ruta_imagen = $request['imagen']->store('upload-ismael', 'public');

        DB::table('ismaels')->insert([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'posicion' => $data['posicion'],
            'imagen' => $ruta_imagen,
            'historia' => $data['historia'],
            'resumen' => $data['resumen'],
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'instagram' => $data['instagram'],
            'correo' => $data['correo'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->action('AdministradorController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ismael  $ismael
     * @return \Illuminate\Http\Response
     */
    public function show(Ismael $ismael)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ismael  $ismael
     * @return \Illuminate\Http\Response
     */
    public function edit(Ismael $ismael)
    {
        return view('administradores.grupos.ismael.edit', compact('ismael'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ismael  $ismael
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ismael $ismael)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'posicion' => 'required',
            'historia' => 'required',
            'resumen' => 'required',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'correo' => '' 
        ]);

        $ismael->nombre = $data['nombre'];
        $ismael->apellido = $data['apellido'];
        $ismael->posicion = $data['posicion'];
        $ismael->historia = $data['historia'];
        $ismael->resumen = $data['resumen'];
        $ismael->facebook = $data['facebook'];
        $ismael->twitter = $data['twitter'];
        $ismael->instagram = $data['instagram'];
        $ismael->correo = $data['correo'];
        $ismael->updated_at = date('Y-m-d H:i:s');

        if(request('imagen')){
            $ruta_imagen = $request['imagen']->store('upload-consentido', 'public');

            $ismael->imagen = $ruta_imagen;
        }

        $ismael->save();

        return redirect()->action('IsmaelController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ismael  $ismael
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ismael $ismael)
    {
        $ismael->delete();

        return redirect()->action('IsmaelController@index');
    }
}
