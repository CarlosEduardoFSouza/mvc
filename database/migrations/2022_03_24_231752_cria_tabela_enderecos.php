<?php

use ...;

class CriaTabelaEnderecos extends Migration
{
    public function up()
    {
        Schema::create(table: 'enderecos', function(Blueprint $table){
            $table->id();
            $table->string(column: 'cep');
            $table->string(column: 'logradouro');
            $table->string(column: 'numero');
            $table->string(column: 'bairro');
            $table->string(column: 'cidade');
            $table->string(column: 'estado');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists(table: 'enderecos');
    }
}