<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class role_permission_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permission')->insert(
            array(
                ['id_role' => 1, 'id_permission' => 1],
                ['id_role' => 1, 'id_permission' => 2],
                ['id_role' => 1, 'id_permission' => 3],
                ['id_role' => 2, 'id_permission' => 2],
                ['id_role' => 2, 'id_permission' => 3],
                ['id_role' => 3, 'id_permission' => 2],
            )
        );
    }
}
