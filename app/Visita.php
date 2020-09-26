<?php

namespace App;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Visita
 * 
 * @property int $ID
 * @property Carbon $Fecha
 * @property string $Motivo
 * @property string $Comentario
 * @property Carbon|null $Proxima_visita
 * @property string $Receta
 * @property string $doctor_id
 * @property string $paciente_id
 *
 * @package App
 */

class Visita extends Model
{
    protected $table = 'visitas';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'Fecha',
		'Motivo',
		'Comentario',
		'Proxima_visita',
		'Receta',
		'doctor_id',
		'paciente_id',
	
	];
}
