<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsMessage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('message')->insert(['message' => 'El dato ingresado no puede ser nulo', 'cause' => 'El dato ingresado no puede ser NULO', 'solution' => 'Ingrese el valor requerido', 'message_type' => 'E', 'module_id' => '1', 'status_id' => 1]);
        DB::table('message')->insert(['message' => 'El mensaje indicado [%s1] no recibe parámetros', 'cause' => 'El mensaje indicado no tiene parámetros configurados', 'solution' => 'Verifique el mensaje y los parámetros ingresados', 'message_type' => 'E', 'module_id' => '1', 'status_id' => 1]);
        DB::table('message')->insert(['message' => 'El %s1 ingresado [%s2] no existe configurado en el sistema', 'cause' => 'El dato ingrersado no existe en la BD', 'solution' => 'Verifique la información ingresada', 'message_type' => 'E', 'module_id' => '1', 'status_id' => 1]);
        DB::table('message')->insert(['message' => 'Su sesión ha sido cerrada!', 'cause' => 'Sesión finalizada por inactividad o por haber ingresado al sistema desde otro dispositivo', 'solution' => 'Por favor ingrese nuevamente', 'message_type' => 'E', 'module_id' => '1', 'status_id' => 1]);
    }
}
