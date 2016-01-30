<?php

use Illuminate\Database\Seeder;

class MatriculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ParadaCerta\Models\Matricula::class, 10)->create();        
    }
}
