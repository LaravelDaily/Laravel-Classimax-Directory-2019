<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-03-26 09:02:48',
            'updated_at' => '2019-03-26 09:02:48',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '17',
                'title'      => 'category_create',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '18',
                'title'      => 'category_edit',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '19',
                'title'      => 'category_show',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '20',
                'title'      => 'category_delete',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '21',
                'title'      => 'category_access',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '22',
                'title'      => 'city_create',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '23',
                'title'      => 'city_edit',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '24',
                'title'      => 'city_show',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '25',
                'title'      => 'city_delete',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '26',
                'title'      => 'city_access',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '27',
                'title'      => 'company_create',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '28',
                'title'      => 'company_edit',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '29',
                'title'      => 'company_show',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '30',
                'title'      => 'company_delete',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ],
            [
                'id'         => '31',
                'title'      => 'company_access',
                'created_at' => '2019-03-26 09:02:48',
                'updated_at' => '2019-03-26 09:02:48',
            ]];

        Permission::insert($permissions);
    }
}
