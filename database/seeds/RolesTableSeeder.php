<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'default' => 0,
                'created_at' => '2018-07-21 16:37:56',
                'updated_at' => '2019-09-07 22:42:01',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'manager',
                'guard_name' => 'web',
                'default' => 0,
                'created_at' => '2019-09-07 22:41:38',
                'updated_at' => '2019-09-07 22:41:38',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'client',
                'guard_name' => 'web',
                'default' => 1,
                'created_at' => '2019-09-07 22:41:54',
                'updated_at' => '2019-09-07 22:41:54',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'engineer',
                'guard_name' => 'web',
                'default' => 0,
                'created_at' => '2019-12-15 18:50:21',
                'updated_at' => '2019-12-15 18:50:21',
                'deleted_at' => NULL,
            ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'engineer',
                    'guard_name' => 'web',
                    'default' => 0,
                    'created_at' => '2019-12-15 18:50:21',
                    'updated_at' => '2019-12-15 18:50:21',
                    'deleted_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'supervisor',
                    'guard_name' => 'web',
                    'default' => 0,
                    'created_at' => '2019-12-15 18:50:21',
                    'updated_at' => '2019-12-15 18:50:21',
                    'deleted_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'vendor',
                    'guard_name' => 'web',
                    'default' => 0,
                    'created_at' => '2019-12-15 18:50:21',
                    'updated_at' => '2019-12-15 18:50:21',
                    'deleted_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'service-provider',
                    'guard_name' => 'web',
                    'default' => 0,
                    'created_at' => '2019-12-15 18:50:21',
                    'updated_at' => '2019-12-15 18:50:21',
                    'deleted_at' => NULL,
                ),
        ));


    }
}
