<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiante;
use App\Models\Bibliotecario;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Libro
 *
 * @property $id
 * @property $name
 * @property $edicion
 * @property $ejempleras
 * @property $estudiante_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    use HasFactory;
    static $rules = [
		'name' => 'required',
		'edicion' => 'required',
		'ejempleras' => 'required',
		'estudiante_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    //protected $fillable = ['name','edicion','ejempleras','estudiante_id'];

    protected $model = Libro::class;
    protected $primaryKey = "id";
    protected $fillable = ['nombre','editorial','ejemplares','bibliotecario_id'];
    protected $hidden = "id";
    
    public function bibliotecario(){
      return $this->belongsToMany(Bibliotecario::class);
  }
  public function estudiante(){
    return $this->belongsToMany(Estdiante::class);
}

}
