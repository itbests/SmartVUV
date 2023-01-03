<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_type')->insert(['name_' => 'Queja', 'days_attention' => 15, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Reclamo', 'days_attention' => 15, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Sugerencia', 'days_attention' => 15, 'priority' => 6, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Felicitación', 'days_attention' => 15, 'priority' => 6, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Solicitud de Información', 'days_attention' => 15, 'priority' => 5, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Consultas Varias', 'days_attention' => 15, 'priority' => 6, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Solicitud de Copia', 'days_attention' => 15, 'priority' => 6, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Derecho de Perición en Interés General', 'days_attention' => 2, 'priority' => 3, 'view_line_process' => 'N', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Derecho de Perición en Interés Particular', 'days_attention' => 2, 'priority' => 3, 'view_line_process' => 'N', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Denuncia', 'days_attention' => 15, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Respuesta a PQRS', 'days_attention' => 15, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Correspondencia Externa', 'days_attention' => 15, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Correspondencia Interna', 'days_attention' => 15, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Tutela', 'days_attention' => 4, 'priority' => 1, 'view_line_process' => 'N', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Licencia de Construcción', 'days_attention' => 40, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Demanda', 'days_attention' => 15, 'priority' => 3, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
        DB::table('package_type')->insert(['name_' => 'Querella Policiva', 'days_attention' => 15, 'priority' => 4, 'view_line_process' => 'S', 'status_id' => 1, 'package_type_class_id' => 1 ]);
    }
}
