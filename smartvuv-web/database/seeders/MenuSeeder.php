<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert(['id' => 0, 'name_' => 'home', 'display_name' => 'Inicio', 'menu_dad_id' => -99, 'link_command' => '#', 'tooltip' => 'Inicio', 'image_icon' => 'fas fa-home fa-fw', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 1, 'name_' => 'settings', 'display_name' => 'Configuración', 'menu_dad_id' => 0, 'link_command' => '#', 'tooltip' => 'Configuración del Sistema', 'image_icon' => 'fas fa-cog fa-fw', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 2, 'name_' => 'operating_units', 'display_name' => 'Áreas Organizacionales', 'menu_dad_id' => 1, 'link_command' => 'app/operatingUnit', 'tooltip' => 'Dependencias de la compañía', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => 'Configuración / Áreas Organizacionales', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 3, 'name_' => 'user_profiles', 'display_name' => 'Roles de Usuario', 'menu_dad_id' => 1, 'link_command' => '#', 'tooltip' => 'Perfiles de Usuario', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 4, 'name_' => 'system_users', 'display_name' => 'Usuarios del Sistema', 'menu_dad_id' => 1, 'link_command' => '#', 'tooltip' => 'Usuarios del Sistema', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 5, 'name_' => 'document_management', 'display_name' => 'Gestión Documental', 'menu_dad_id' => 0, 'link_command' => '#', 'tooltip' => 'Gestión de Correspondencia', 'image_icon' => 'fa fa-envelope fa-fw', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 6, 'name_' => 'correspondence_search', 'display_name' => 'Busqueda de Casos', 'menu_dad_id' => 5, 'link_command' => '#', 'tooltip' => 'Busqueda de Correspondencia', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 7, 'name_' => 'incoming_correspondence', 'display_name' => 'Correspondencia Recibida', 'menu_dad_id' => 5, 'link_command' => '#', 'tooltip' => 'Correspondencia Entrante', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 8, 'name_' => 'documents_reception', 'display_name' => 'Radicar Proceso', 'menu_dad_id' => 7, 'link_command' => '#', 'tooltip' => 'Recepción de Documentos', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 9, 'name_' => 'atrach_document_process', 'display_name' => 'Anexar Documento a Proceso', 'menu_dad_id' => 5, 'link_command' => '#', 'tooltip' => 'Anexar Documento a Proceso', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 10, 'name_' => 're-printing_sticker', 'display_name' => 'Imprimir Sticker', 'menu_dad_id' => 5, 'link_command' => '#', 'tooltip' => 'Re-Impresión de Sticker', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 11, 'name_' => 'mailing', 'display_name' => 'Envío de Correspondencia', 'menu_dad_id' => 5, 'link_command' => '#', 'tooltip' => 'Envío de Correspondencia', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 12, 'name_' => 'request_consecutive', 'display_name' => 'Solicitar Rádicado', 'menu_dad_id' => 11, 'link_command' => '#', 'tooltip' => 'Solicitar Consecutivo', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 13, 'name_' => 'request_online', 'display_name' => 'PQRS en Línea', 'menu_dad_id' => 0, 'link_command' => '#', 'tooltip' => 'PQRS en Línea', 'image_icon' => 'fa fa-bullhorn fa-fw', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 14, 'name_' => 'registration_requests', 'display_name' => 'Registro de PQRS', 'menu_dad_id' => 13, 'link_command' => '#', 'tooltip' => 'Registro de PQRS', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 15, 'name_' => 'status_query_process', 'display_name' => 'Consultar PQRS', 'menu_dad_id' => 13, 'link_command' => '#', 'tooltip' => 'Consulta Estado Proceso', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 16, 'name_' => 'attention_requests', 'display_name' => 'Atención de Tareas', 'menu_dad_id' => 0, 'link_command' => '#', 'tooltip' => 'Atención de PQRS', 'image_icon' => 'fa fa-tasks fa-fw', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 17, 'name_' => 'centralize_activities', 'display_name' => 'Centralizar Actividades', 'menu_dad_id' => 16, 'link_command' => '#', 'tooltip' => 'Centralizador de Actividades', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 18, 'name_' => 'process_assignment', 'display_name' => 'Asignar Tareas', 'menu_dad_id' => 17, 'link_command' => '#', 'tooltip' => 'Asignación de Procesos', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 19, 'name_' => 'attention_process', 'display_name' => 'Atender Tarea', 'menu_dad_id' => 16, 'link_command' => '#', 'tooltip' => 'Atender Proceso', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 20, 'name_' => 'reports', 'display_name' => 'Informes', 'menu_dad_id' => 0, 'link_command' => '#', 'tooltip' => 'Reportes e Indicadores AT', 'image_icon' => 'fas fa-file-download fa-fw', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 1]);
        DB::table('menu')->insert(['id' => 21, 'name_' => 'delivery_dependencies', 'display_name' => 'Entrega a Dependencias', 'menu_dad_id' => 20, 'link_command' => '#', 'tooltip' => 'Entrega a Dependencias', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 22, 'name_' => 'consecutive_reserved', 'display_name' => 'Consecutivos Reservados', 'menu_dad_id' => 20, 'link_command' => '#', 'tooltip' => 'Consecutivos Reservados', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 23, 'name_' => 'allowances_dependency', 'display_name' => 'Asignaciones por Dependencia', 'menu_dad_id' => 20, 'link_command' => '#', 'tooltip' => 'Asignaciones por Dependencia', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 24, 'name_' => 'allocations_per_user', 'display_name' => 'Asignaciones por Usuario', 'menu_dad_id' => 20, 'link_command' => '#', 'tooltip' => 'Asignaciones por Usuario', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 25, 'name_' => 'cases_dependency', 'display_name' => 'Casos por Dependencia', 'menu_dad_id' => 20, 'link_command' => '#', 'tooltip' => 'Casos por Dependencia', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
        DB::table('menu')->insert(['id' => 26, 'name_' => 'cases_user', 'display_name' => 'Casos por Usuario', 'menu_dad_id' => 20, 'link_command' => '#', 'tooltip' => 'Casos por Usuario', 'image_icon' => '', 'status_id' => 1, 'breadcrumb' => '', 'menu_type_id' => 2]);
    }
}
