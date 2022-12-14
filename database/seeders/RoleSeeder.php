<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Usuario']);

        //ADMIN
        $permission = Permission::create(['name' => 'admin.home',
        'description' => 'Acceso al panel administrativo'])->syncRoles([$role1]);

        //Students
        $permission = Permission::create(['name' => 'admin.students.index',
        'description' => 'Ver todos los estudiantes'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.students.create',
        'description' => 'Crear estudiante'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.students.edit',
        'description' => 'Editar estudiante'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.students.show',
        'description' => 'Ver estudiante'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.students.destroy',
        'description' => 'Eliminar estudiante'])->syncRoles([$role1]);

        //Users
        $permission = Permission::create(['name' => 'admin.users.index',
        'description' => 'Ver todos los usuarios'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.users.create',
        'description' => 'Crear usuario'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.users.show',
        'description' => 'Ver usuario'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.users.edit',
        'description' => 'Editar usuario'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.users.destroy',
        'description' => 'Eliminar usuario'])->syncRoles([$role1]);

        //Carrera
        $permission = Permission::create(['name' => 'admin.careers.index',
        'description' => 'Ver todas las ucarrera'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.careers.create',
        'description' => 'Crear carrera'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.careers.show',
        'description' => 'Ver carrera'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.careers.edit',
        'description' => 'Editar carrera'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.careers.destroy',
        'description' => 'Eliminar carrera'])->syncRoles([$role1]);

        //Campus
        $permission = Permission::create(['name' => 'admin.campuses.index',
        'description' => 'Ver todos los campus'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.campuses.create',
        'description' => 'Crear campus'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.campuses.show',
        'description' => 'Ver campus'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.campuses.edit',
        'description' => 'Editar campus'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.campus.destroy',
        'description' => 'Eliminar campus'])->syncRoles([$role1]);

        //Questionnaire
        $permission = Permission::create(['name' => 'admin.questionnaires.index',
        'description' => 'Ver todos los cuestionarios'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.questionnaires.create',
        'description' => 'Crear cuestionario'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.questionnaires.show',
        'description' => 'Ver cuestionario'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.questionnaires.edit',
        'description' => 'Editar cuestionario'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.questionnaires.destroy',
        'description' => 'Eliminar cuestionario'])->syncRoles([$role1]);

        //Check
        $permission = Permission::create(['name' => 'admin.checks.index',
        'description' => 'Ver todos los checks'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.checks.show',
        'description' => 'Ver check'])->syncRoles([$role1]);

        //Assistance
        $permission = Permission::create(['name' => 'admin.assistances.index',
        'description' => 'Ver todas las asistencias'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.assistances.show',
        'description' => 'Ver asistencia'])->syncRoles([$role1]);
    }
}
