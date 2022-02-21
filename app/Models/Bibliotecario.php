<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bibliotecario
 * 
 *
 * @property $id
 * @property $nombre
 * @property $cargo
 * @property $turno
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bibliotecario extends Model
{
    use HasFactory;
    static $rules = [
		'nombre' => 'required',
		'cargo' => 'required',
		'turno' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    //protected $fillable = ['nombre','cargo','turno','telefono'];

    protected $model = Bibliotecario::class;
    protected $primaryKey = "id";    
    protected $fillable = ['nombre','cargo','turno','telefono'];
    protected $hidden = ['id'];

    public function libros(){
      return $this->hasMany(Libros::class);
  }

}
