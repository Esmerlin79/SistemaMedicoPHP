<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $Id
 * @property string $Nombre
 * @property int $TIpoUsuario
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'TIpoUsuario' => 'int'
	];

	protected $fillable = [
		'Nombre',
		'TIpoUsuario'
	];
}
