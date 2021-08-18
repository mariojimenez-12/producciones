<?php

namespace App\Http\Controllers;

use App\CategoriaServicio;
use App\Reservacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservacionController extends Controller
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
        $reservaciones = DB::table('reservacions')->get();
        return view('administradores.reservaciones.index', compact('reservaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //categorias sin modelo
        $grupos = DB::table('categoria_grupos')->get()->pluck( 'grupo','id');
        // $servicios = DB::table('categoria_servicios')->get()->pluck('servicio','id');

        //categoria con modelo
        $servicios = CategoriaServicio::all(['id', 'servicio']);

        return view('administradores.reservaciones.create', compact('grupos', 'servicios'));
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
            'telefono1' => 'required',
            'telefono2' => '',
            'domicilio' => 'required',
            'referencias' => 'required',
            'colonia' => 'required',
            'codigopostal' => 'required',
            'horas' => 'required',
            'fecha' => 'required',
            'servicio' => 'required',
            'grupo' => 'required'
        ]);

        DB::table('reservacions')->insert( [
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'telefono1' => $data['telefono1'],
            'telefono2' => $data['telefono2'],
            'domicilio' => $data['domicilio'],
            'referencias' => $data['referencias'],
            'colonia' => $data['colonia'],
            'codigo_postal' => $data['codigopostal'],
            'horas' => $data['horas'],
            'fecha' => $data['fecha'],
            'servicios_id' => $data['servicio'],
            'grupos_id' => $data['grupo'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('/reservations?resultado=1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function show(Reservacion $reservacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservacion $reservacion)
    {
        $grupos = DB::table('categoria_grupos')->get()->pluck('grupo', 'id');
        $servicios = DB::table('categoria_servicios')->get()->pluck('servicio', 'id');

        return view('administradores.reservaciones.edit', compact('grupos', 'servicios', 'reservacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono1' => 'required',
            'telefono2' => 'required',
            'domicilio' => 'required',
            'referencias' => 'required',
            'colonia' => 'required',
            'codigopostal' => 'required',
            'horas' => 'required',
            'fecha' => 'required',
            'servicio' => 'required',
            'grupo' => 'required'
        ]);

        $reservacion->nombre = $data['nombre'];
        $reservacion->apellido = $data['apellido'];
        $reservacion->telefono1 = $data['telefono1'];
        $reservacion->telefono2 = $data['telefono2'];
        $reservacion->domicilio = $data['domicilio'];
        $reservacion->referencias = $data['referencias'];
        $reservacion->colonia = $data['colonia'];
        $reservacion->codigo_postal = $data['codigopostal'];
        $reservacion->horas = $data['horas'];
        $reservacion->fecha = $data['fecha'];
        $reservacion->categoria_grupos = $data['grupo'];
        $reservacion->categoria_servicios = $data['servicio'];

        $reservacion->save();

        return redirect()->action('ReservacionController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservacion $reservacion)
    {
        $reservacion->delete();

        return redirect()->action('ReservacionController@index');
    }
}
