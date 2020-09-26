<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Citaspendiente
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
class Citaspendiente extends Model
{
	protected $table = 'citaspendientes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id' => 'int',
		'Costo' => 'int',
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
		'Id',
		'Costo',
		'Doctor_Asigando',
		'Fecha',
		'Hora',
		'Duracion',
		'Paciente_asignado',
		'Completada'
	];
}
