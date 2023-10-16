<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaTablaCategorias extends Migration
{
    public function up()
    {
        //Preparar columnas para la tabla noticias2
        $this->forge->addField([

            'id_categoria' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' =>true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);

        
        $this->forge->addKey('id_categoria',true);//Identificar la llave primaria
        $this->forge->createTable('categorias2');//Crear la tabla 
    }

    public function down()
    {
        $this->forge->dropTable('categorias2');
    }
}
