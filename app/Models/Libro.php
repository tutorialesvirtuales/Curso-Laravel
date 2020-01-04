<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class Libro extends Model
{
    protected $table = "libro";
    protected $fillable = ['titulo', 'isbn', 'autor', 'cantidad', 'editorial', 'foto'];

    public function prestamo()
    {
        return $this->HasMany(LibroPrestamo::class);
    }

    public static function setCaratula($foto, $actual = false)
    {
        if ($foto) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/caratulas/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/caratulas/$imageName", $imagen->stream());
            return $imageName;
        } else {
            return false;
        }
    }
}
