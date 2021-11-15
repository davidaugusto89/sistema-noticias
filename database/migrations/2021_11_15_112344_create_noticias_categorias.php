<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNoticiasCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_categorias', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->timestamps();
            $table->softdeletes();
        });

        DB::table('noticias_categorias')->insert(
            array(
                ['categoria' => 'Educação'],
                ['categoria' => 'Agro'],
                ['categoria' => 'Ciência'],
                ['categoria' => 'Economia'],
                ['categoria' => 'Saúde'],
                ['categoria' => 'Mundo'],
                ['categoria' => 'Esporte'],
                ['categoria' => 'Tecnologia'],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias_categorias');
    }
}
