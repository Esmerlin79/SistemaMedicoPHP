<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

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
 * @property int $doctor_id
 * @property int $paciente_id
 *
 * @package App\Models
 */
class Visita extends Model
{
	protected $table = 'visitas';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'doctor_id' => 'int',
		'paciente_id' => 'int'
	];

	protected $dates = [
		'Fecha',
		'Proxima_visita'
	];

	protected $fillable = [
		'Fecha',
		'Motivo',
		'Comentario',
		'Proxima_visita',
		'Receta',
		'doctor_id',
		'paciente_id'
	];
}
