<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $permisos = [
            array('id' => '1', 'nombre' => 'Crear libro', 'slug' => 'crear-libro', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'nombre' => 'Prestar libro', 'slug' => 'prestar-libro', 'created_at' => $now, 'updated_at' => $now)
        ];
        DB::table('permiso')->insert($permisos);
    }
}
