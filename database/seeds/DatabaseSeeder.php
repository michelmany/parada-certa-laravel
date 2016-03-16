<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        factory('ParadaCerta\Models\User')->create(
            [
                'name' => 'Michel',
                'email' => 'michel@nitdesign.com.br',
                'password' => bcrypt('nit1049'),
                'remember_token' => str_random(10),
            ]
        );

        $this->call(CursoTableSeeder::class);

        // Model::reguard();
    }
}
