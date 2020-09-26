<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property int $Id
 * @property int|null $Costo
 * @property int $Doctor_Asigando
 * @property Carbon $Fecha
 * @property Carbon $Hora
 * @property int $Duracion
 * @property int $Paciente_asignado
 * @property bool $Completada
 *
 * @package App\Models
 */
class Cita extends Model
{
	protected $table = 'citas';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'Costo' => 'int',
		'controlPrecio' => 'int',
		'Doctor_Asigando' => 'int',
		'Duracion' => 'int',
		'Paciente_asignado' => 'int',
		'Completada' => 'bool'
	];

	protected $dates = [
		'Fecha',
		'Hora'
	];

	protected $fillable = [
		'Costo',
		'controlPrecio',
		'Doctor_Asigando',
		'Fecha',
		'Hora',
		'Duracion',
		'Paciente_asignado',
		'Completada'
	];
}
