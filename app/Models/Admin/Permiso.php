<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = "permiso";
    protected $fillable = ['nombre', 'slug'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permiso_rol');
    }
}
