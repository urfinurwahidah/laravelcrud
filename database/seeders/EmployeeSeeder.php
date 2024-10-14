<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama'=> 'Urfi Nurwahidah',
            'jeniskelamin'=> 'cewe',
            'notelpon'=> '085724823619',
        ]);
    }
}
