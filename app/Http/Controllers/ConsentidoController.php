<?php

namespace App\Http\Controllers;

use App\Consentido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsentidoController extends Controller
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

        $consentido = DB::table('consentidos')->get();

        return view('administradores.grupos.consentidos.consentidos', compact('consentido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administradores.grupos.consentidos.create');
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

        $ruta_imagen = $request['imagen']->store('upload-consentidos', 'public');

        DB::table('consentidos')->insert([
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
     * @param  \App\Consentido  $consentido
     * @return \Illuminate\Http\Response
     */
    public function show(Consentido $consentido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consentido  $consentido
     * @return \Illuminate\Http\Response
     */
    public function edit(Consentido $consentido)
    {
        return view('administradores.grupos.consentidos.edit', compact('consentido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consentido  $consentido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consentido $consentido)
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

        $consentido->nombre = $data['nombre'];
        $consentido->apellido = $data['apellido'];
        $consentido->posicion = $data['posicion'];
        $consentido->historia = $data['historia'];
        $consentido->resumen = $data['resumen'];
        $consentido->facebook = $data['facebook'];
        $consentido->twitter = $data['twitter'];
        $consentido->instagram = $data['instagram'];
        $consentido->correo = $data['correo'];
        $consentido->updated_at = date('Y-m-d H:i:s');

        if(request('imagen')){
            $ruta_imagen = $request['imagen']->store('upload-consentido', 'public');

            $consentido->imagen = $ruta_imagen;
        }

        $consentido->save();

        return redirect()->action('ConsentidoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consentido  $consentido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consentido $consentido)
    {
        $consentido->delete();

        return redirect()->action('ConsentidoController@index');
    }
}
