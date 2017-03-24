<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //Se permite el insertado de llas siguientes columnas
	protected $fillable = [
		'idVen',
		'cusVen',
                'regDestVen',
		'fecProcVen',
		'provieneVen',
		'regionVen',
		'latVen',
		'lngVen',
		'zonaVen',
		'lanchonjVen',
		'embVen',
		'coordFlotVen',
		'puertoVen',
		'latVen2',
		'lngVen2',
		'resProdVen',
		'admCampVen',
		'resAlmVen',
		'resDespVen',
		'fecSalAlmCli',
		'destCli',
		'destLlegadaCli',
		'latCli',
		'lngCli'
	];
}
