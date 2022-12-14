<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Criando tabela 'unidades'
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5); // Sigla da unidade ex: cm, mm, kg
            $table->string('descricao', 30); // Descreve a unidade de medida
            $table->timestamps();
        });

        // Adicionar o relacionamento com a tabela ‘produtos’
        Schema::table('produtos', function (Blueprint $table) { // Selecionando a tabela 'produtos'
            $table->unsignedBigInteger('unidade_id');
            // Constraint (foreign key)
            $table->foreign('unidade_id')->references('id')->on('unidades');
        }); 
        
        // Adicionar o relacionamento com a tabela ‘produto_detalhes’
        Schema::table('produto_detalhes', function (Blueprint $table) { // Selecionando a tabela  ‘produto_detalhes’
            $table->unsignedBigInteger('unidade_id');
            // Constraint (foreign key)
            $table->foreign('unidade_id')->references('id')->on('unidades');
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remover o relacionamento com a tabela ‘produto_detalhes’
        Schema::table('produto_detalhes', function (Blueprint $table) { 
            // Remover foreign key
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); // <nomeTabela>_<coluna>_foreign
            // Remover a coluna 'unidade_id'
            $table->dropColumn('unidade_id');
        }); 

        // Remover o relacionamento com a tabela ‘produtos’
        Schema::table('produtos', function (Blueprint $table) { 
            // Remover foreign key
            $table->dropForeign('produtos_unidade_id_foreign'); // <nomeTabela>_<coluna>_foreign
            // Remover a coluna 'unidade_id'
            $table->dropColumn('unidade_id');
        }); 

        Schema::dropIfExists('unidades');
    }
}
