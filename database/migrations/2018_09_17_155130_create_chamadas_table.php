<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamadas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // CADASTRO
            $table->string('numero_de_origem', 19)->nullable(false); // +55 (62) 98106-8439
            $table->String('numero_de_destino', 19)->nullable(false);
            $table->time('tempo_da_ligacao')->nullable(false);
            $table->timestamp('data_e_hora_da_ligacao')->nullable(false);

            // EXCLUSÃO LOGICA
            $table->softDeletes();

            // COMENTÁRIO DA LIGAÇÃO
            $table->text('comentario')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamadas');
    }
}
