<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombre
 * @property $semestre
 * @property $edad
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
  use HasFactory;
    static $rules = [
		'nombre' => 'required',
		'semestre' => 'required',
		'edad' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    //protected $fillable = ['nombre','semestre','edad','telefono'];

    protected $model = Estudiante::class;
    protected $primaryKey = "id";
    protected $fillable = ['nombre','semestre','edad','telefono'];
    protected $hidden = "id"; 

}
