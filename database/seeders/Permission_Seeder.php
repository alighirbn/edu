<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Permission_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add Permissions
        $permissions = [
            //dashboard
            'dashboard-info',
            'dashboard-hr',
            'dashboard-ges',
            'dashboard-financial',
            'dashboard-Planning',
            'dashboard-users',
            'dashboard-roles',

            'tables-edit',

            //employee permissions
            'employee-list',
            'employee-show',
            'employee-create',
            'employee-update',
            'employee-delete',

            //building permissions
            'building-list',
            'building-show',
            'building-create',
            'building-update',
            'building-delete',

            //facility permissions
            'facility-list',
            'facility-show',
            'facility-create',
            'facility-update',
            'facility-delete',

            //*************************financial****************************** */

            //financial_accountant permissions
            'financial_accountant-list',
            'financial_accountant-show',
            'financial_accountant-create',
            'financial_accountant-update',
            'financial_accountant-delete',

            //payroll permissions
            'payroll-list',
            'payroll-employees_list',
            'payroll-show',
            'payroll-create',
            'payroll-update',
            'payroll-delete',

            //payroll_date permissions
            'payroll_date-list',
            'payroll_date-show',
            'payroll_date-create',
            'payroll_date-update',
            'payroll_date-delete',

            //financial_default permissions
            'financial_default-list',
            'financial_default-update',

            //**************************user******************************* */

            // user permissions
            'user-list',
            'user-show',
            'user-create',
            'user-update',
            'user-delete',

            // role permissions
            'role-list',
            'role-show',
            'role-create',
            'role-update',
            'role-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'department_id' => 1,
            'url_address' => $this->get_random_string(60),
            'Status' => 'active',
        ]);

        $role = Role::create(['name' => 'admin']);

        $per = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($per);

        $user->assignRole([$role]);

        $role = Role::create(['name' => 'accountant']);
        $role->syncPermissions($per);
        $user = User::create([
            'name' => 'العباس',
            'email' => 'samir@gmail.com',
            'password' => bcrypt('12345678'),
            'department_id' => 1,
            'url_address' => $this->get_random_string(60),
            'Status' => 'active',
        ]);
        $user->assignRole([$role]);

    }

    public function get_random_string($length)
    {
        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";
        $length = rand(22, $length);

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $array[$random];
        }
        return $text;
    }
}
