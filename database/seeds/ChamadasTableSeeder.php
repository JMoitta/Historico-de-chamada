<?php

use Illuminate\Database\Seeder;

class ChamadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('truncate chamadas');
        factory(App\Models\Chamada::class, 1000)->create();
    }
}
