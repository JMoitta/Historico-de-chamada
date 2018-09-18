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
        factory(App\Models\Chamada::class, 100)->create();
    }
}
