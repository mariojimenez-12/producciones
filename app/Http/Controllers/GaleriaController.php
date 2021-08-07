<?php

namespace App\Http\Controllers;

use App\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriaController extends Controller
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
        $galeria = Galeria::all();

        return view('administradores.galeria.index', compact('galeria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administradores.galeria.create');
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
            'imagen' => 'required|image',
            'descripcion' => 'required'
        ]);

        $ruta_imagen = $request['imagen']->store('upload-galeria', 'public');

        DB::table('galerias')->insert([
            'imagen' => $ruta_imagen,
            'descripcion' => $data['descripcion'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->action('GaleriaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        $galeria->delete();


        return redirect()->action('GaleriaController@index');
    }
}
