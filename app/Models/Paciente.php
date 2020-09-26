<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 * 
 * @property string $Cedula
 * @property string $nombre
 * @property string $Apellido
 * @property Carbon $fecha_nacimiento
 * @property string $TIpo_Sangre
 *
 * @package App\Models
 */
class Paciente extends Model
{
	protected $table = 'pacientes';
	protected $primaryKey = 'Cedula';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'fecha_nacimiento'
	];

	protected $fillable = [
		'nombre',
		'Apellido',
		'fecha_nacimiento',
		'TIpo_Sangre'
	];
}
