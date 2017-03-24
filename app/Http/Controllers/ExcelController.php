<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use DB;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

    }

    public function exportMeses($type)
    {

        $meses = DB::table('c_sacos_x_ano_mes')->get();

        foreach ($meses as $mes) 
        {
            $datos[] = array(
                "ano_eje"=> $mes->ano_eje,
                "mes_eje" => $mes->mes_eje,
                "total"=> $mes->total,
                "toneladas"=> $mes->toneladas,
            );
        }

        Excel::create('Meses', function($excel) use($datos) 
        {
            $excel->sheet('Sheet01', function($sheet) use($datos) 
            {
                $sheet->fromArray( $datos );
                $sheet->row(1, [ 'Año', 'Mes', 'Total (sacos)', 'Toneladas (t)' ]);
            });

        })->export($type);
    }

    public function exportDepartamentos($type)
    {

        $departamentos = DB::table('c_sacos_x_ano_departamento')->get();

        foreach ($departamentos as $departamento) 
        {
            $datos[] = array(
                "regDestVen"=> $departamento->regDestVen,
                "total"=> $departamento->total,
                "toneladas"=> $departamento->toneladas,
                "ano_eje"=> $departamento->ano_eje,
            );
        }

        Excel::create('Departamentos', function($excel) use($datos) 
        {
            $excel->sheet('Sheet01', function($sheet) use($datos) 
            {
                $sheet->fromArray( $datos );
                $sheet->row(1, [ 'Departamento', 'Total (sacos)', 'Toneladas (t)', 'Año' ]);
            });

        })->export($type);
    }


    public function exportSegmentos($type)
    {

        $segmentos = DB::table('c_sacos_x_ano_segmento')->get();

        foreach ($segmentos as $segmento) 
        {
            $datos[] = array(
                "segCli" => $segmento->segCli,
                "total"=> $segmento->total,
                "toneladas"=> $segmento->toneladas,
                "ano_eje"=> $segmento->ano_eje,
            );
        }

        Excel::create('Segmentos', function($excel) use($datos) 
        {
            $excel->sheet('Sheet01', function($sheet) use($datos) 
            {
                $sheet->fromArray( $datos );
                $sheet->row(1, [ 'Segmento', 'Total (sacos)', 'Toneladas (t)', 'Año' ]);
            });

        })->export($type);
    }

    public function exportIslas($type)
    {

        $islas = DB::table('c_sacos_x_ano_isla')->get();

        foreach ($islas as $isla) 
        {
            $datos[] = array(
                "provieneVen" => $isla->provieneVen,
                "total"=> $isla->total,
                "toneladas"=> $isla->toneladas,
                "ano_eje"=> $isla->ano_eje,
            );
        }

        Excel::create('Islas', function($excel) use($datos) 
        {
            $excel->sheet('Sheet01', function($sheet) use($datos) 
            {
                $sheet->fromArray( $datos );
                $sheet->row(1, [ 'Isla', 'Total (sacos)', 'Toneladas (t)', 'Año' ]);
            });

        })->export($type);
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
        //
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
