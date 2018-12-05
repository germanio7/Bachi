<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'crear_alumno']);
        Permission::create(['name' => 'editar_alumno']);
        Permission::create(['name' => 'elimniar_alumno']);
        Permission::create(['name' => 'ver_alumno']);

        Permission::create(['name' => 'crear_curso']);
        Permission::create(['name' => 'editar_curso']);
        Permission::create(['name' => 'elimniar_curso']);
        Permission::create(['name' => 'ver_curso']);

        Permission::create(['name' => 'crear_materia']);
        Permission::create(['name' => 'editar_materia']);
        Permission::create(['name' => 'elimniar_materia']);
        Permission::create(['name' => 'ver_materia']);

        Permission::create(['name' => 'crear_docente']);
        Permission::create(['name' => 'editar_docente']);
        Permission::create(['name' => 'elimniar_docente']);
        Permission::create(['name' => 'ver_docente']);

        Permission::create(['name' => 'crear_padre']);
        Permission::create(['name' => 'editar_padre']);
        Permission::create(['name' => 'elimniar_padre']);
        Permission::create(['name' => 'ver_padre']);

        Permission::create(['name' => 'crear_nota']);
        Permission::create(['name' => 'editar_nota']);
        Permission::create(['name' => 'elimniar_nota']);
        Permission::create(['name' => 'ver_nota']);

        Permission::create(['name' => 'crear_asistencia']);
        Permission::create(['name' => 'editar_asistencia']);
        Permission::create(['name' => 'elimniar_asitencia']);
        Permission::create(['name' => 'ver_asitencia']);

        $role = Role::create(['name' => 'administrador']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'auxiliar']);
        $role->givePermissionTo(['crear_nota','crear_asistencia','crear_padre','crear_docente','crear_materia','crear_curso','crear_alumno']);

        $role = Role::create(['name' => 'docente']);
        $role->givePermissionTo(['crear_nota','editar_nota','ver_nota']);

        $role = Role::create(['name' => 'alumno']);
        $role->givePermissionTo(['ver_alumno']);
    }
}
