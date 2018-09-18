<?php

use Illuminate\Database\Seeder;

class ConfiguracoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('truncate configuracoes');
        factory(App\Models\Configuracao::class, 1)->create();
    }
}
