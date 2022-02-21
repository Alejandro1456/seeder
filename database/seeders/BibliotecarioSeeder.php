<?php

namespace Database\Seeders;
use App\Models\Bibliotecario;
use Illuminate\Database\Seeder;

class BibliotecarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Bibliotecario::factory(10)->create();
    }
}
