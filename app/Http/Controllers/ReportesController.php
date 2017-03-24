<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
    }

    public function indexMeses()
    {
        $meses = DB::table('c_sacos_x_ano_mes')->get();
        $years = DB::table('c_sacos_x_ano_mes')->select('ano_eje')->distinct()->get();
        //return $years;
        return view('reportes.meses', compact('meses', 'years'));
    }

    public function indexDepartamentos()
    {
        $departamentos = DB::table('c_sacos_x_ano_departamento')->get();
        $years = DB::table('c_sacos_x_ano_departamento')->select('ano_eje')->distinct()->get();
        //return $years;
        return view('reportes.departamentos', compact('departamentos', 'years'));
    }

    public function indexSegmentos()
    {
        $segmentos = DB::table('c_sacos_x_ano_segmento')->get();
        $years = DB::table('c_sacos_x_ano_segmento')->select('ano_eje')->distinct()->get();
        //return $segmentos;
        return view('reportes.segmentos', compact('segmentos', 'years'));
    }

    public function indexIslas()
    {
        $islas = DB::table('c_sacos_x_ano_isla')->get();
        $years = DB::table('c_sacos_x_ano_isla')->select('ano_eje')->distinct()->get();
        //return $islas;
        return view('reportes.islas', compact('islas', 'years'));
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
    public function storeMeses()
    {
        $years = DB::table('c_sacos_x_ano_mes')->select('ano_eje')->distinct()->get();
        $data__year = request('year');

        if ($data__year) {
            $results = DB::table('c_sacos_x_ano_mes')->where('ano_eje', 'like', $data__year)->get();
        }else{
            $results = DB::table('c_sacos_x_ano_mes')->get();
        }

        
        return view('reportes.meses', compact('results', 'years', 'data__year'));
    }

    public function storeDepartamentos()
    {
        $years = DB::table('c_sacos_x_ano_departamento')->select('ano_eje')->distinct()->get();
        $data__year = request('year');

        if ($data__year) {
            $results = DB::table('c_sacos_x_ano_departamento')->where('ano_eje', 'like', $data__year)->get();
        }else{
            $results = DB::table('c_sacos_x_ano_departamento')->get();
        }

        
        return view('reportes.departamentos', compact('results', 'years', 'data__year'));
    }

    public function storeSegmentos()
    {
        $years = DB::table('c_sacos_x_ano_segmento')->select('ano_eje')->distinct()->get();
        $data__year = request('year');

        if ($data__year) {
            $results = DB::table('c_sacos_x_ano_segmento')->where('ano_eje', 'like', $data__year)->get();
        }else{
            $results = DB::table('c_sacos_x_ano_segmento')->get();
        }

        
        return view('reportes.segmentos', compact('results', 'years', 'data__year'));
    }

    public function storeIslas()
    {
        $years = DB::table('c_sacos_x_ano_isla')->select('ano_eje')->distinct()->get();
        $data__year = request('year');

        if ($data__year) {
            $results = DB::table('c_sacos_x_ano_isla')->where('ano_eje', 'like', $data__year)->get();
        }else{
            $results = DB::table('c_sacos_x_ano_isla')->get();
        }

        
        return view('reportes.islas', compact('results', 'years', 'data__year'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
