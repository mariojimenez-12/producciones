<?php

namespace App\Http\Controllers;

use App\Boletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoletinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletines = Boletin::paginate(10);

        return view('administradores.boletin.index', compact('boletines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required'
        ]);

        DB::table('boletins')->insert([
            'email' => $data['email'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function show(Boletin $boletin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function edit(Boletin $boletin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boletin $boletin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boletin $boletin)
    {
        $boletin->delete();

        return redirect()->action('BoletinController@index');
    }
}
